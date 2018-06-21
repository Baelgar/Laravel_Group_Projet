@extends('layouts.base')

@section('title',"Loc'all")
@section('content')
<div class="container">
    <form class="form-signin" action="{{url('/search/post')}}" method="post">
        {{ csrf_field() }}
        <div class="text-center mb-4">
            <h1 class="h3 mb-3 font-weight-normal">Une salle à louer d'urgence</h1>
            <p>Recherchez la salle de vos rêves, avec Loc'all !</p>
        </div>
        <div class="row text-center">
            <div class="form-label-group col-lg-offset-6 col-sm-offset-6 col-sm-6 col-lg-6">
                <input type="text" id="inputEmail" name="emplacement" class="form-control" placeholder="Où cherchez vous une salle ?" required autofocus>
                <label for="inputEmail">My</label>
            </div>
        </div>

        <divv class="row text-center">
            <div class="col-lg-4 col-sm-4">
                <input type="date" name="fromDate" >
            </div>
            <div class="col-lg-4 col-sm-4">
                <input type="date" name="toDate">
            </div>
        </divv>
        <div class="container-fluid row text-center">
            <div class="col-sm-4">
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </div>
        </div>

    </form>
</div>

@endsection