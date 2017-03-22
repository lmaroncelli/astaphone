<!-- FlatFy Theme - Andrea Galanti /-->
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="@yield('seo_description')">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
    	@if (isset($page))
    	  {{$page->title}}
    	@else
    	  @yield('seo_title')
    	@endif
    </title>

    <!-- Bootstrap core CSS -->
    <link href="{{ url('frontend_new/assets/css/bootstrap.min.css') }}" rel="stylesheet">
 
    <!-- Custom Google Web Font -->
    <link href="{{ url('frontend_new/assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Custom CSS-->
    <link href="{{ url('frontend_new/assets/css/general.css') }}" rel="stylesheet">
	
    <link href="{{ url('frontend_new/assets/css/custom.css') }}" rel="stylesheet">
	
	 <!-- Owl-Carousel 2-->
	<link href="{{ url('frontend_new/assets/css/owl2/owl.carousel.min.css') }}" rel="stylesheet">
	<link href="{{ url('frontend_new/assets/css/owl2/owl.theme.default.min.css') }}" rel="stylesheet">
    
	<link href="{{ url('frontend_new/assets/css/style.css') }}" rel="stylesheet">
	<link href="{{ url('frontend_new/assets/css/custom.css') }}" rel="stylesheet">

	<link href="{{ url('frontend_new/assets/css/animate.css') }}" rel="stylesheet">
	
	<!-- Magnific Popup core CSS file -->
	<link rel="stylesheet" href="{{ url('frontend_new/assets/css/magnific-popup.css') }}"> 
	
	<script src="{{ url('frontend_new/assets/js/modernizr-2.8.3.min.js') }}"></script>  <!-- Modernizr /-->
	<!--[if IE 9]>
		<script src="{{ url('frontend_new/assets/js/PIE_IE9.js') }}"></script>
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="{{ url('frontend_new/assets/js/PIE_IE678.js') }}"></script>
	<![endif]-->

	<!--[if lt IE 9]>
		<script src="{{ url('frontend_new/assets/js/html5shiv.js') }}"></script>
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

<body id="home">

	<!-- Preloader -->
	{{-- <div id="preloader">
		<div id="status"></div>
	</div> --}}
	
	@include('layouts.menu')
	{{-- 
	se volgio posso fare l'overwrite mettendo il menu tra @section @overwrite in una pagina figlia
	 --}}
	@yield('menu')
	
	@yield('header','no header')	

	@include('admin.show_errors')
	
	@yield('content')

	@include('layouts.footer')
	
	{{-- 
	se volgio posso fare l'overwrite mettendo il menu tra @section @overwrite in una pagina figlia
	 --}}
    @yield('footer')
	
   
    <!-- JavaScript -->
    <script src="{{ url('frontend_new/assets/js/jquery-1.10.2.js') }}"></script>
    <script src="{{ url('frontend_new/assets/js/bootstrap.js') }}"></script>
	
	<!-- Owl-Carousel 2-->
	<script src="{{ url('frontend_new/assets/js/owl2/owl.carousel.min.js') }}"></script>
	
	<script src="{{ url('frontend_new/assets/js/picla.js') }}"></script>
	<script src="{{ url('frontend_new/assets/js/script.js') }}"></script>
	<!-- StikyMenu -->
	<script src="{{ url('frontend_new/assets/js/stickUp.min.js') }}"></script>
	<script type="text/javascript">
	  jQuery(function($) {
		$(document).ready( function() {
		  $('.navbar-default').stickUp();
		  
		});
	  });
	
	</script>
	<!-- Smoothscroll -->
	{{-- <script type="text/javascript" src="{{ url('frontend_new/assets/js/jquery.corner.js') }}"></script>  --}}
	<script src="{{ url('frontend_new/assets/js/wow.min.js') }}"></script>
	<script>
	 new WOW().init();
	</script>
	<script src="{{ url('frontend_new/assets/js/classie.js') }}"></script>
	{{-- <script src="{{ url('frontend_new/assets/js/uiMorphingButton_inflow.js') }}"></script> --}}
	<!-- Magnific Popup core JS file -->
	<script src="{{ url('frontend_new/assets/js/jquery.magnific-popup.js') }}"></script> 

	@yield('feed_map')    

	<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqImK9lRFJdcFLSt0W-t_QQC70fCsCwV0&callback=initMap">
    </script>
    @yield('script')
</body>

</html>
