<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="@yield('seo_description')">
    <meta name="author" content="">
   <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>
      @if (isset($page))
        {{$page->title}}
      @else
        @yield('seo_title')
      @endif
    </title>


    

    <!-- Bootstrap core CSS -->
    <link href="{{ url('frontend/assets/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ url('frontend/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/assets/css/font-awesome.min.css') }}" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  
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

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ url('/') }}">CELIACHIAMO</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            {{-- Menu dinamico --}}
            {!! Helper::menu() !!}
            
            {{-- Menu Utente Loggato oppure No --}}
            @if (Auth::guest())
                <li><a href="{{ url('/login') }}">Login</a></li>
                <li><a href="{{ url('/register') }}">Register</a></li>
            @else
              
              @if (Auth::user()->carrelli->count() > 0)
                <li><a href="{{ route('carrello.show') }}">
                    <i class="material-icons">carrello</i><span class="badge green">{{Auth::user()->carrelli()->first()->prodotti()->count()}}</span>  
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </a>
                </li>
              @endif
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }} <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="{{ route('user.profile') }}">
                      profile
                    </a>
                  </li>
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
            {{-- FINE Menu utente --}}
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
      <div class="starter-template">

        <h1>@yield('title')</h1>
        @include('admin.show_errors')
        @yield('content')
        
        <hr class="featurette-divider">
        @yield('mappa', '')
      
       <!-- FOOTER -->
       <footer>
         <p class="pull-right"><a href="#">Back to top</a></p>
         <p>&copy; 2016 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
       </footer>
  
      </div>
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="{{ url('frontend/assets/js/bootstrap.min.js') }}"><\/script>')</script>
    <script src={{ url('frontend/assets/js/bootstrap.min.js') }}></script>
    
    @yield('feed_map')    

    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqImK9lRFJdcFLSt0W-t_QQC70fCsCwV0&callback=initMap">
        </script>
    @yield('script')
  </body>
</html>
