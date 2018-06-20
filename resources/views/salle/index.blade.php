@extends('layouts.base')

@section('title', 'gestion de Salles')


@section('content')

<div class="row justify-content-end " style="padding-bottom: 10px">
    <div class="col-4">
        <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal">Ajouter une salle
        </button>
    </div>
</div>

<div class="panel panel-default">
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Salle</th>
            <th>Prix</th>
            <th>CP</th>
            <th>Nombre de place</th>
            <th>Supprimer</th>
            <th>Modifier</th>
        </tr>
        </thead>
        @foreach ($forfaits as $salle)
            <tbody>
            <tr>
                <td>{{ $salle->name }}</td>
                <td>{{ $salle->prix }}</td>
                <td>{{ $salle->postalCode }}</td>
                <td>{{ $salle->nombrePlace }}</td>
                <td><a href="{{url('Salle' . "/" . $salle->id ."/delete")}}" class="button btn btn-light">Supprimer</a></td>
                <td><a href="{{url('Salle' . "/" . $salle->id ."/update")}}" class="button btn btn-light">Changer</a></td>
            </tr>
            </tbody>
        @endforeach
    </table>
</div>
@endsection


<form class="form-signin" action="{{url('/CreateSalle')}}" method="post">
    {{ csrf_field() }}
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Nouvelle  Salle</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="inputname" class="col-form-label">Nom:</label>
                        <input type="text" class="form-control" id="inputname" placeholder="Salle marmourd">

                    </div>
                    <div class="form-group">
                        <label for="inputville" class="col-form-label">Ville:</label>
                        <input type="text" class="form-control" id="inputville" placeholder="Villeurbanne">
                    </div>
                    <div class="form-group">
                        <label for="inputCP" class="col-form-label">Code Postale:</label>
                        <input type="text" name="email" class="form-control" id="inputCP" placeholder="97139">

                    </div>

                    <div class="form-group">
                        <label for="inputForfait">Forfait:</label>
                        <select id="inputForfait" class="form-control">
                            <option selected>Choose...</option>
                            @foreach($forfaits  as $forfait)
                                <option>{{$forfait->name}}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary">CréSer la salle </button>
                </div>
            </div>
        </div>
    </div>
</form>
