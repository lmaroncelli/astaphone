@extends('layouts.frontend_astaphone')

@section('seo_title'){!!$page->seo_title!!}@stop
@section('seo_description'){!!$page->seo_description!!}@stop


@section('css')
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<link href="{{ url('frontend/assets/css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">
@stop

@section('title')
	Astaphone.com
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
				<li><a href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>{{$page->title}}</li>
			</ul>
		</div>
	</div>
@stop

@section('content')
	 
<div class="container_content">
	{!!$page->content!!}	
</div>
 
@stop


@section('script')
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src={{ url('frontend/assets/js/ie10-viewport-bug-workaround.js') }}></script>

	<script type="text/javascript">
		$(document).ready(function(){
		  
		});
	</script>
@stop

