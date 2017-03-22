@extends('layouts.frontend_new')


@section('seo_title'){!!$page->seo_title!!}@stop
@section('seo_description'){!!$page->seo_description!!}@stop



@section('css')
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<link href="{{ url('frontend/assets/css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">
	<link href="{{ url('frontend/assets/css/jquery.bxslider.css') }}" rel="stylesheet">

	{{-- demo slider categorie prodotti --}}
	
	<link href="{{ url('frontend/assets/css/flexslider.css') }}" rel="stylesheet">

	{{--  flex slide caption CSS --}}
	<style type="text/css">
	.flex-caption {
	  width: 100%;
	  padding: 2%;
	  left: 0;
	  bottom: 0;
	  background: rgba(0,0,0,.5);
	  color: #fff;
	  text-shadow: 0 -1px 0 rgba(0,0,0,.3);
	  font-size: 14px;
	  line-height: 18px;
	}
	
	/* override to suite the site*/
	.flexslider {
		margin-bottom: 0;
	}
	</style>

@stop

@section('script_head')
	<script src="{{ url('frontend/assets/js/flexslider/modernizr.js') }}"></script>
@stop


@section('title')
	{{ isset($page) ? $page->title : $categoriaRicette->nome }}
@stop


@section('content')



	
	@if (isset($page))
	
		{{-- HEADER --}}
		@if ( !is_null($slide_header) )
			 <div>heade slide</div>
		@endif
		{{-- FINE HEADER --}}

		{!! $page->content !!}
		
		
		{{-- GALLERY CATEGORIE PRODOTTI --}}
		@if ( !is_null($slide_categorie_prodotti) )	
			@include('pages.gallery_categorie_prodotti')
		@endif
		{{-- GALLERY CATEGORIE PRODOTTI --}}


		{{-- WIDGET 3 COLS --}}
		@if (!is_null($widgetThreeColumns))
			@include('pages.widget_three_columns')
		@endif
		{{-- FINE WIDGET 3 COLS --}}
		
		{{-- WIDGET PC --}}
		@if (!is_null($widgetProdottiConfezionati))
			@include('pages.prodotti_confezionati')
		@endif
		{{-- FINE WIDGET PC --}}
		

		{{-- PARALLAX --}}
		
		<div class="parallax"></div>

		{{-- FINE PARALLAX --}}
		
	@endif

	@if (isset($prodotti))
		<hr/>
		@if (!$prodotti->count())
			Nessun prodotto disponibile
		@else
			@foreach ($prodotti as $prodotto)
				<div>
					<h1>{{ strip_tags($prodotto->nome) }}</h1>
					<form action="{{url( route('carrello.add',$prodotto->id) )}}" method="POST" style="float: right;">
						{{ csrf_field() }}
						<button type="submit" class="btn btn-info">Carrello</button>
					</form>
					<p>{{ str_limit( strip_tags($prodotto->descrizione),200 ) }}</p>
				</div>
				@if (!is_null($prodotto->caratteristiche) && $prodotto->caratteristiche->count())
					<div>
						@foreach ($prodotto->caratteristiche as $caratteristica)
							 {{ $caratteristica->nome }}
						@endforeach
					</div>
				@endif
			@endforeach
		@endif
	
	@endif

	@if (isset($categorieRicette) && !is_null($categorieRicette))
		<ul>
			@foreach ($categorieRicette as $categoria)
				<li>
					<a href="{{ url('categoria/'.$categoria->uri) }}">
						<img src="{{ url('images/'.$categoria->img) }}" width="150" height="100">
						{{$categoria->nome}} ({{$categoria->ricette->count()}})
					</a>
				</li>
			@endforeach
		</ul>
	@endif


	@if (isset($categoriaRicette))
		<h2>Le ricette di "{{$categoriaRicette->nome}}"</h2>
		<ul>
			@foreach ($categoriaRicette->ricette as $ricetta)
				<li>{{$ricetta->titolo}}</li>
			@endforeach
		</ul>
	@endif

@stop


@if ($page->gm_lat != '' && $page->gm_long != '')

	@section('mappa')
		<div class="row">
		  <div class="col-md-3">
		    <label>Trova itinerario</label>
		    <input type="text" class="form-control" placeholder="Via Tonti,16 Rimini" id="partenza" value="{{old('partenza')}}">
		    <p>
		    	{!!nl2br($page->gm_indirizzo)!!}
		    </p>
		  	<input id="submitMappa" type="button" class="btn btn-default btn-xs" value="trova percorso sulla mappa">
		  </div>
		  <div class="col-md-9">
		    <div id="map"></div>
		  </div>
		 </div>

		<hr class="featurette-divider">
	@stop


	@section('feed_map')
			{{-- carica le variabile js con i valori della pagina  --}}
			<script>
				var $lat = {{$page->gm_lat}};
				var $long = {{$page->gm_long}};
				var $info = "{{ json_encode($page->gm_indirizzo) }}";
				var $title = "{{$page->gm_nome}}";
			</script>
			<script src={{ url('frontend/assets/js/custom.js') }}></script>
	@stop

@endif



@section('script')
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src={{ url('frontend/assets/js/ie10-viewport-bug-workaround.js') }}></script>

	<script src="{{ url('frontend/assets/js/bxslider/jquery.bxslider.min.js') }}"></script>

	<script type="text/javascript">
		$(document).ready(function(){
		  $('.bxslider').bxSlider({
		  	adaptiveHeight: true,
		  	 mode: 'fade'
		  });
		});
	</script>

	
	<!-- FlexSlider -->
	<script defer src="{{ url('frontend/assets/js/flexslider/jquery.flexslider.js') }}"></script>

	<script type="text/javascript">

	  $(window).load(function(){
	    $('#carousel').flexslider({
	      animation: "slide",
	      controlNav: false,
	      animationLoop: false,
	      slideshow: false,
	      itemWidth: 210,
	      itemMargin: 5,
	      asNavFor: '#slider'
	    });

	    $('#slider').flexslider({
	      animation: "slide",
	      controlNav: false,
	      animationLoop: false,
	      slideshow: false,
	      sync: "#carousel",
	      start: function(slider){
	        $('body').removeClass('loading');
	      }
	    });
	  });
	</script>

@stop