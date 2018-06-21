@extends('layouts.base')
@section('title','Réservation')


@section('content')
    <div class="container">
            {{ $salle->id }}
            {{ $salle->name }}
            {{ $salle->city }}
            {{ $salle->prix }}
            {{ $salle->nombrePlace }}

        <form>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Valider ma réservation</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Revenir à ma recherche</label>
            </div>
            <button type="submit" class="btn btn-primary">Valider mon choix</button>
        </form>
    </div>

@endsection