@extends('layouts.frontend_astaphone')

@section('seo_title'){!!$homepage->seo_title!!}@stop
@section('seo_description'){!!$homepage->seo_description!!}@stop


@section('css')
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<link href="{{ url('frontend/assets/css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">
@stop

@section('title')
	Astaphone.com
@stop


@section('banner')
	@if (is_null($video))
		<!-- banner -->
		<div class="banner" style="background:url({{$first_header_image}}) no-repeat center 0px; ">
			<div class="container">
				<h3>{{$first_desc_image}}<span>a Rimini</span></h3>
				{{-- <h3>Electronic Store, <span>Special Offers</span></h3> --}}
			</div>
		</div>
		<!-- //banner --> 
	@else
		<video width="100%" autoplay loop>
		  <source src="{{url('images/'.$video->nome)}}" type="{{$video->mime}}">
		  Your browser does not support the video tag.
		</video>
	@endif
@stop

@section('content')
	
		<!-- banner-bottom -->
		<div class="banner-bottom">
			<div class="container_content">
				<div class="col-md-3 wthree_banner_bottom_left">
					@if (!is_null($url_video_presentazione))
						<div class="video-img">
							<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
								<span class="glyphicon glyphicon-expand" aria-hidden="true"></span>
							</a>
						</div> 
						<!-- pop-up-box -->     
						<script src="{{ url('frontend_astaphone/assets/js/jquery.magnific-popup.js') }}" type="text/javascript"></script>
						<!--//pop-up-box -->
						<div id="small-dialog" class="mfp-hide">
							<iframe src="{{$url_video_presentazione}}"></iframe>
						</div>
						<script>
							$(document).ready(function() {
							$('.popup-with-zoom-anim').magnificPopup({
								type: 'inline',
								fixedContentPos: false,
								fixedBgPos: true,
								overflowY: 'auto',
								closeBtnInside: true,
								preloader: false,
								midClick: true,
								removalDelay: 300,
								mainClass: 'my-mfp-zoom-in'
							});
																							
							});
						</script>
					@endif
				</div>
				<div class="col-md-9 wthree_banner_bottom_right">
					<div class="in-vetrina">
						<div class="container">
							<h2>In vetrina</h2>
						</div>
					</div>
					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						
						<ul id="myTab" class="nav nav-tabs" role="tablist">
						@foreach ($categorie as $count => $categoria)
							<li role="presentation" @if ($count == 0) class="active" @endif><a href="#{{str_slug($categoria->nome)}}" id="{{str_slug($categoria->nome)}}-tab" role="tab" data-toggle="tab" aria-controls="{{str_slug($categoria->nome)}}">{{ $categoria->nome }}</a></li>
						@endforeach
						</ul>
						<div id="myTabContent" class="tab-content">
							@foreach ($categorie as $count => $categoria)
							{{-- ctaegoria-tab --}}
							<div role="tabpanel" class="tab-pane fade  @if ($count == 0) active in @endif" id="{{str_slug($categoria->nome)}}" aria-labelledby="{{str_slug($categoria->nome)}}-tab">
								<div class="agile_ecommerce_tabs">
									@foreach ($categoria->prodotti as $prodotto)
										<div class="col-md-3 agile_ecommerce_tab_left">
											<div class="hs-wrapper">
												<img src="{{ url('images/'.$prodotto->img_main) }}" alt=" " class="img-responsive" />
												<div class="w3_hs_bottom">
													<ul>
														<li>
															<a href="#" data-toggle="modal" data-target="#myModal_{{$prodotto->id}}"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
														</li>
													</ul>
												</div>
											</div> 
											<h5><a {{-- href="single.html" --}}>{{$prodotto->nome}}</a></h5>
											<div class="simpleCart_shelfItem">
												<p>
													@if ($prodotto->prezzo_offerta > 0)
														<span>{{$prodotto->prezzo}}</span> 
														<i class="item_price">{{$prodotto->prezzo_offerta}}</i>
													@else
														<i class="item_price">{{$prodotto->prezzo}}</i>
													@endif
												</p>
											</div>
										</div>
									@endforeach
									<div class="clearfix"> </div>
								</div>
							</div>
							@endforeach
						</div>
					</div> {{-- #togglable-tabs --}}
				</div>{{-- col-md-7 --}} 
				<div class="clearfix"> </div>
			</div>{{-- container --}}
		</div> <!-- //banner-bottom --> 

		<!-- modal-video -->
		@foreach ($categorie as $count => $categoria)
			@foreach ($categoria->prodotti as $prodotto)
				<div class="modal video-modal fade" id="myModal_{{$prodotto->id}}" tabindex="-1" role="dialog" aria-labelledby="myModal_{{$prodotto->id}}">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
							</div>
							<section>
								<div class="modal-body">
									<div class="col-md-5 modal_body_left">
										<img src="{{ url('images/'.$prodotto->img_main) }}" alt=" " class="img-responsive" />
									</div>
									<div class="col-md-7 modal_body_right">
										<h4>{{$prodotto->nome}}</h4>
										<hr>
										<p>{!!$prodotto->descrizione!!}</p>
										<hr>
										<p>{!!$prodotto->scheda!!}</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</section>
						</div>
					</div>
				</div>
			@endforeach
		@endforeach
		<!-- //modal-video -->
		
			@if ($homepage->gm_lat != '' && $homepage->gm_long != '')
		  		
		  		@include('home.mappa')

		  		@section('feed_map')
		  				{{-- 
		  				carica le variabile js con i valori della pagina  
		  				il centro della mappa è il colosseo !! (Fabiano dixit)
		  				--}}
		  				<script>
		  					var $lat = {{$homepage->gm_lat}};
		  					var $long = {{$homepage->gm_long}};
		  					var $img_info = '{{$homepage->gm_info_img}}';
		  					if ($img_info.length > 0) {
		  						var $info = '<img src="{{ url('images/'.$homepage->gm_info_img) }}" alt="{{ $homepage->gm_info }}">';
		  					} else {
		  						var $info = "{{ $homepage->gm_info }}";
		  					}
		  					var $info_title = "{{ $homepage->gm_info }}";

		  					var $gm_icon = '{{$homepage->gm_icon}}';

		  					if($gm_icon.length > 0)
		  						{
		  						var $icon = "{{ url('images/'.$homepage->gm_icon) }}";
		  						}
		  					else
		  						{
		  						var $icon = "";	
		  						}

		  					var $lat_center = 44.063685; 
		  					var $long_center = 12.570100;
		  					
		  				</script>
		  				<script src={{ url('frontend_astaphone/assets/js/home-map.js') }}></script>
		  		@stop
			@endif


		<!-- top-gallery -->
		<div class="top-brands">
			<div class="container">
				<h3>I nostri servizi</h3>
				<div class="sliderfig">
					<ul id="flexiselDemo1">			
						@foreach ($footer_images as $key => $img)
							<li>
								<img src="{{$img}}" alt="{{$desc_footer_images[$key]}}" class="img-responsive picla" alt="ciao" />								
							</li>
						@endforeach
					</ul>
				</div>

				<script type="text/javascript">
						$(window).load(function() {
							$("#flexiselDemo1").flexisel({
								visibleItems: 4,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 3000,    		
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: { 
									portrait: { 
										changePoint:480,
										visibleItems: 1
									}, 
									landscape: { 
										changePoint:640,
										visibleItems:2
									},
									tablet: { 
										changePoint:768,
										visibleItems: 3
									}
								}
							});


							$('a[data-toggle="tooltip"]').tooltip({
							    animated: 'fade',
							    placement: 'bottom',
							    html: true
							});
							
						});
				</script>
				<script type="text/javascript" src="{{ url('frontend_astaphone/assets/js/jquery.flexisel.js') }}"></script>
			</div>
		</div>
		<!-- //top-brands --> 

		<!-- newsletter -->
		<div class="newsletter">
			<div class="container">
				<div class="col-md-6 w3agile_newsletter_left">
					<h3>Newsletter</h3>
					<p>Excepteur sint occaecat cupidatat non proident, sunt.</p>
				</div>
				<div class="col-md-6 w3agile_newsletter_right">
					<form action="#" method="post">
						<input type="email" name="Email" placeholder="Email" required="">
						<input type="submit" value="" />
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //newsletter -->

	{{-- 
	<div>
	{{$homepage->content}}	
	</div>
 --}}

@stop


@section('script')
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src={{ url('frontend/assets/js/ie10-viewport-bug-workaround.js') }}></script>

	<script type="text/javascript">
		$(document).ready(function(){
		  
		});
	</script>
@stop

