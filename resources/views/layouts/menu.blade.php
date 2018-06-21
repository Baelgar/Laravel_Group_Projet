<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="{{ url('home') }}">Loc'all</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" >
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('home') }}">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Recherche de salles</a>
            </li>
              @if(Auth::user()->isAdmin())
            <li class="nav-item">
                <a class="nav-link" href="/admin">Administration</a>
            </li>
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
                    <a href="{{ url('account') }}">My account</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>
        @endif
    </div>
</nav>
