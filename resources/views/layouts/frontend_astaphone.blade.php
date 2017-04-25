<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>
	  @yield('seo_title')
</title>


<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="@yield('seo_description')">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- Custom Theme files -->
<link href="{{ url('frontend_astaphone/assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ url('frontend_astaphone/assets/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />


<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="{{ url('frontend_astaphone/assets/css/font-awesome.css') }}" rel="stylesheet"> 
<!-- //font-awesome icons -->


<link rel="stylesheet" href="{{ url('frontend_astaphone/assets/css/jquery.countdown.css') }}" /> <!-- countdown --> 
<!-- web fonts --> 
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //web fonts -->  

@yield('css')

<script src="{{ url('frontend_astaphone/assets/js/jquery-1.10.2.js') }}"></script>
<!-- start-smooth-scrolling -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- //end-smooth-scrolling --> 

@yield('script_head')

</head> 
<body>
	<!-- for bootstrap working -->
	<script type="text/javascript" src="{{ url('frontend_astaphone/assets/js/bootstrap-3.1.1.min.js') }}"></script>
	<!-- //for bootstrap working -->

	<!-- header -->
	<div class="header" id="home1">
		<div class="container">
			<div class="w3l_logo">
				<h1><a href="index.html">Astaphone<span>Il tuo negozio.<br>Come a casa.</span></a></h1>
			</div>
		</div>
	</div>
	<!-- //header -->
	

	@include('layouts.menu')
	{{-- 
	se volgio posso fare l'overwrite mettendo il menu tra @section @overwrite in una pagina figlia
	 --}}
	@yield('menu')


	
	@yield('banner')
	
	
	@yield('content')


	
	@include('layouts.footer')
	
	{{-- 
	se volgio posso fare l'overwrite mettendo il menu tra @section @overwrite in una pagina figlia
	 --}}
    @yield('footer')
	
	@yield('feed_map')    

	<script src="{{ url('frontend_astaphone/assets/js/picla.js') }}"></script>

	<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqImK9lRFJdcFLSt0W-t_QQC70fCsCwV0&callback=initMap">
    </script>
    @yield('script')

</body>
</html>