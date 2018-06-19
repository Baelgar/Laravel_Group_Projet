@include('components.header')
<body>

        <header class="masthead mb-auto">
            {{--<div class="inner">--}}
            @include('layouts.menu')
            {{--</div>--}}
        </header>



<div class="container-fluid d-flex w-100 h-150 p-3 mx-auto flex-column">

    <div class="row">
        <div class="col">
            <h1 class="cover-heading">Loc'ALL</h1>
        </div>
    </div>
    <main role="main" class="inner cover">

        @yield('content')

    </main>

    @include('components.footer')
</div>

</body>

</html>