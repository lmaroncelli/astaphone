<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ url('css/app.css') }}" rel="stylesheet">
    
    @yield('css')

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    @yield('script_head')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/pannello') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">

                        &nbsp;
                        <li><a href="{{ route('users.index') }}">Utenti</a></li>
                        <li><a href="{{ route('pages.index') }}">Pagine</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Pagine Custom <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">                
                                <li><a href="{{ route('homepage.edit') }}">Homepage</a></li>
                                @foreach ($custompages as $custompage)
                                    <li><a href="{{ route('custompage.edit',$custompage->title) }}">{{$custompage->title}}</a></li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Widget <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">                
                                <li><a href="{{ route('slide-prodotti-widget.index') }}">widget slide prodotti</a></li>
                                <li><a href="{{ route('three-cols-widget.index') }}">widget 3 colonne</a></li>
                            </ul>
                        </li>

                        <li><a href="{{ route('slide.index') }}">Slide</a></li>
                        <li><a href="{{ route('slide-categorie.index') }}">Slide categorie prodotti</a></li>
                        <li><a href="{{ route('gallerie.index') }}">Gallerie</a></li>

                        <li><a href="{{ route('prodotti.index') }}">Prodotti</a></li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Ricette <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('ricette.index') }}">Elenco</a></li>
                                <li><a href="{{ route('categorie-ricette.index') }}">Categorie</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Blog <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('articoli.index') }}">Articoli</a></li>
                                <li><a href="{{ route('categorie-articoli.index') }}">Categorie</a></li>
                            </ul>
                        </li>
                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class="container">
        <div class="panel">
            <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h1 class="page-header">@yield('title')</h1>
                @include('admin.show_errors')
                @yield('content')
            </div>
            </div>
        </div>
        </div>
       

    </div>

    <!-- Scripts -->
    <script src="{{ url('js/app.js') }}"></script>
    
    @yield('script')
    
</body>
</html>
