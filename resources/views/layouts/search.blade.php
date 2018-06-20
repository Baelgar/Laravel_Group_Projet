@extends('layouts.base')


@section('content')

    <form class="form-signin" action="{{url('/search/post')}}" method="post">
      <div class="jumbotron">
        {{ csrf_field() }}
        <div class="text-center mb-4">
            <h1 class="h3 mb-3 font-weight-normal">Une salle à louer d'urgence</h1>
            <p>Recherchez la salle de vos rêves, avec Loc'all !</p>
        </div>
        <div class="row text-center">
            <div class="form-label-group col-lg-offset-6 col-sm-offset-6 col-sm-6 col-lg-6">
              <label for="inputEmail">Choisissez un lieu : </label>
              <input type="text" id="inputLocalisation" name="emplacement" class="form-control" placeholder="Où cherchez vous une salle ?" required autofocus>
            </div>
        </div>
      </div>
  <div class="jumbotron">
    <div class="text-center">
      <p>Sélectionnez votre période</p>
    </div>
        <divv class="row text-center">
          <div class="text-center  mb-4" style="text-align:center;">
              <p> Du </p>
          </div>
          <div class="col-lg-4 col-sm-4">
              <input type="date" name="fromDate" >
          </div>
          <div class="text-center  mb-4">
              <p> au </p>
          </div>
          <div class="col-lg-4 col-sm-4">
              <input type="date" name="toDate">
          </div>
          <div class="text-center  mb-4">
            <p>    </p>
          </div>
            <div class="sm-4">
                <button class="bouton btn btn-lg btn-primary btn-block" type="submit">Valider</button>
            </div>
          </div>
        </divv>
        <div class="container-fluid row text-center">

        </div>
      </div>
    </form>


@endsection
