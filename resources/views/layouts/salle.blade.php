@extends('layouts.base')

@section('title','Descriptif salle')
@section('content')
    <div class="jumbotron jumbotron-fluid text-center">
        <h1 class="display-4">{{$salle->name}}</h1>
        <p class="lead">Serait-ce la salle de vos rêves ?</p>
        <hr class="my-4">
        <h3>Adresse</h3>
        <p>{{$salle->address}}</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </p>
    </div>

@endsection