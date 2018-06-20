@extends('layouts.base')
@yield('title','Résultats de la recherche')


@section('content')
    <table class="table text-center">
        <thead>
        <tr>
            <th scope="col">Numéro de la salle</th>
            <th scope="col">Nom de la salle</th>
            <th scope="col">Son emplacement</th>
            <th scope="col">Son prix</th>
            <th scope="col">Nombre de personnes maximum</th>
            <th scope="col">Accès fiche salle</th>
            <th scope="col">Reserver ?</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($salles as $salle)
                <tr>
                    <th scope="row">{{ $salle->id }}</th>
                    <td>{{ $salle->name }}</td>
                    <td>{{ $salle->city }}</td>
                    <td>{{ $salle->prix }}</td>
                    <td>{{ $salle->nombrePlace }}</td>
                    <td><a href="{{url('salle' . "/" . $salle->id ."/view")}}"class="btn btn-info">Consulter !</a></td>
                    <td><a href="url('')"class="btn btn-success">Réserver !</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection