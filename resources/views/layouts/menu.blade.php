<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="{{ url('home') }}">Loc'all</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" >
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/') }}">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Recherche de salles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">A propos</a>
            </li>
            @if (Auth::user() && Auth::user()->isAdmin())
            <li class="nav-item">
                <a class="nav-link" href="/AdministrationSalle">Salle</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/AdministrationForfait">Forfait</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/AdministrationModule">Module</a>
            </li>
            @endif
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="{{ url('account') }}">Account</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>

        </ul>
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mon profil</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                                <a class="dropdown-item" href="{{ url('account') }}">Mon compte</a>
                                <a class="dropdown-item" href="{{ url('/reservations/rapports') }}">Mes Réservations</a>
                                <a class="dropdown-item" href="{{ url('/logout') }}">Déconnexion</a>
                            </div>
                        </li>
                    </ul>
                @else
                    <ul>
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    </ul>
                @endauth
            </div>
        @endif
    </div>
</nav>
