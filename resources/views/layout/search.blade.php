@extends('layout.base')


@section('content')

    <form class="form-signin">
        <div class="text-center mb-4">
            <h1 class="h3 mb-3 font-weight-normal">Une salle à louer d'urgence</h1>
            <p>Recherchez la salle de vos rêves, avec Loc'all !</p>
        </div>

        <div class="form-label-group">
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputEmail">My</label>
        </div>

        <div class="form-label-group">
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <label for="inputPassword">Password</label>
        </div>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2018</p>
    </form>


@endsection