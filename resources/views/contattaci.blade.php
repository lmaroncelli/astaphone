@extends('layouts.frontend_astaphone')

@section('seo_title'){!!$page->seo_title!!}@stop
@section('seo_description'){!!$page->seo_description!!}@stop


@section('css')
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<link href="{{ url('frontend/assets/css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">


	 <!-- Owl-Carousel 2-->
	<link href="{{ url('frontend_astaphone/assets/css/owl2/owl.carousel.min.css') }}" rel="stylesheet">
	<link href="{{ url('frontend_astaphone/assets/css/owl2/owl.theme.default.min.css') }}" rel="stylesheet">
@stop


@section('banner')
	<!-- //breadcrumbs --> 
	@if (is_null($video))
		<!-- banner -->
		<div class="banner banner10" style="background:url({{$first_header_image}}) no-repeat center 0px; ">
			<div class="container">
				<h3>{{$first_desc_image}}</h3>
			</div>
		</div>
		<!-- //banner --> 
	@else
		<video width="100%" autoplay loop>
		  <source src="{{url('images/'.$video->nome)}}" type="{{$video->mime}}">
		  Your browser does not support the video tag.
		</video>
	@endif
	
	<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="{{ url('/') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>{{$page->title}}</li>
			</ul>
		</div>
	</div>
@stop

@section('content')
	 
<!-- mail -->
<div class="mail">
	<div class="container">
		<h3>{{$page->title}}</h3>
		<div class="agile_mail_grids">
			<div class="col-md-5 contact-left">
				{!!$page->content!!}
			</div>
			<div class="col-md-7 contact-left">
				<form action="#" method="post">
					<input type="text" name="Name" placeholder="Nome" required="">
					<input type="email" name="Email" placeholder="Email" required="">
					<input type="text" name="Telephone" placeholder="Telefono" required="">
					<textarea name="message" placeholder="Messaggio..." required=""></textarea>
					<input type="submit" value="Submit" >
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //mail -->
 
@stop


@section('script')
	<!-- Owl-Carousel 2-->
	<script src="{{ url('frontend_astaphone/assets/js/owl2/owl.carousel.min.js') }}"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src={{ url('frontend/assets/js/ie10-viewport-bug-workaround.js') }}></script>

	<script type="text/javascript">
		$(document).ready(function(){
		  // OwlCarousel N2
		  $("#owlf").owlCarousel({
		  		items:1,
		  		responsiveClass:true,
		  		nav:true,
		  		/*autoWidth:true*/

		  });
		});
	</script>
@stop

