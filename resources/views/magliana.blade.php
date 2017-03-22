@extends('layouts.frontend_new')

@section('seo_title'){!!$page->seo_title!!}@stop
@section('seo_description'){!!$page->seo_description!!}@stop


@section('css')
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<link href="{{ url('frontend/assets/css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">
@stop

@section('title')
	Celiachiamo.com
@stop



@section('header')
	@if (is_null($video))
		<!-- FullScreen -->
	    <div class="intro-header" style="height: 100%; padding-top: 50px; padding-bottom: 50px; color: #f8f8f8; background: url('{{ $first_header_image }}') no-repeat center center">
	    </div>
	@else
		<video width="100%" autoplay loop>
		  <source src="{{url('images/'.$video->nome)}}" type="{{$video->mime}}">
		  Your browser does not support the video tag.
		</video>
	@endif
@stop

@section('content')
	
	
	<div>
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

