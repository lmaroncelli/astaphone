@extends('admin.layouts.backend')

@section('css')
	<link href="{{ url('/css/supernote.css') }}" rel="stylesheet">
@stop

@section('title')
	{{ $page->exists ? 'Modifica Pagina' : 'Nuova pagina'}}
@stop

@section('content')
	

	@if ($page->exists)
		<form  method="POST" action="{{ route('pages.update', $page->id) }}">
		{{ method_field('PUT') }}
	@else
		<form  method="POST" action="{{ route('pages.store') }}">
	@endif
		
		{{ csrf_field() }}
		
		
		<div class="form-group">
		<label for="caratteristiche">In menu</label>
		<div class="checkbox">
  	  <label>
  	    <input type="checkbox" id="inMenu" name="inMenu" value="1" aria-label="Offerta" @if (old('inMenu')==1 || (isset($page->inMenu) && $page->inMenu == 1) ) checked @endif>
  	   </label>
  	</div>
  	</div>
		
		<hr/>
		<hr/>
	
		<div class="form-group">
	    	<label for="titolo">Titolo</label>
	    	<input type="text" class="form-control" id="titolo" placeholder="Titolo" name="title" value="{{old('title', isset($page->title) ? $page->title : null)}}">
	  	</div>

	  	<div class="form-group">
	    	<label for="nome">URI</label>
	    	<input type="text" class="form-control" id="uri" placeholder="URI" name="uri" value="{{old('uri', isset($page->uri) ? $page->uri : null)}}">
	  	</div>
		
		
		<div class="form-group">
		  <label for="">Header Slide</label>
		  <select class="form-control" name="header_slide_id">
		    @foreach ($slideHeader as $key => $titolo)
		      <option value="{{$key}}" @if( old('header_slide_id') == $key || (isset($page->header_slide_id) && $page->header_slide_id == $key)) selected @endif>{{$titolo}}</option>
		    @endforeach
		  </select>
		</div>


		<div class="form-group">
		  <label for="">Categorie Prodotti Slide</label>
		  <select class="form-control" name="categorie_prodotti_slide_id">
		    @foreach ($slideCategorieProdotti as $key => $titolo)
		      <option value="{{$key}}" @if( old('categorie_prodotti_slide_id') == $key || (isset($page->categorie_prodotti_slide_id) && $page->categorie_prodotti_slide_id == $key)) selected @endif>{{$titolo}}</option>
		    @endforeach
		  </select>
		</div>


		<div class="form-group">
		  	<label for="nome">Content</label>

	  		<textarea class="form-control" rows="3" name="content" id="content">{{old('content', isset($page->content) ? $page->content : null)}}</textarea>
		</div>

		<div class="form-group">
		  <label for="codice">Widget 3 colonne</label>
		  <select class="form-control" name="three_columns_widget_id">
		    @foreach ($widgetThreeColumns as $key => $nome)
		      <option value="{{$key}}" @if( old('three_columns_widget_id') == $key || (isset($page->three_columns_widget_id) && $page->three_columns_widget_id == $key)) selected @endif>{{$nome}}</option>
		    @endforeach
		  </select>
		</div>


		<div class="form-group">
		  <label for="codice">Widget Prodotti Freschi</label>
		  <select class="form-control" name="prodotti_freschi_widget_id">
		    @foreach ($widgetProdottiFreschi as $key => $nome)
		      <option value="{{$key}}" @if( old('prodotti_freschi_widget_id') == $key || (isset($page->prodotti_freschi_widget_id) && $page->prodotti_freschi_widget_id == $key)) selected @endif>{{$nome}}</option>
		    @endforeach
		  </select>
		</div>

		<div class="form-group">
		  <label for="codice">Widget Prodotti Confezionati</label>
		  <select class="form-control" name="prodotti_confezionati_widget_id">
		    @foreach ($widgetProdottiConfezionati as $key => $nome)
		      <option value="{{$key}}" @if( old('prodotti_confezionati_widget_id') == $key || (isset($page->prodotti_confezionati_widget_id) && $page->prodotti_confezionati_widget_id == $key)) selected @endif>{{$nome}}</option>
		    @endforeach
		  </select>
		</div>
		<hr />
		
		<h4>Mappa</h4>
		<div class="form-group">
	    	<label for="gm_nome">Nome</label>
	    	<input type="text" class="form-control" id="gm_nome" placeholder="Celiachiamo LAB" name="gm_nome" value="{{old('gm_nome', isset($page->gm_nome) ? $page->gm_nome : null)}}">
		  	<label for="gm_indirizzo">Indirizzo</label>
	  		<textarea class="form-control" rows="3" name="gm_indirizzo" id="gm_indirizzo">{{old('gm_indirizzo', isset($page->gm_indirizzo) ? $page->gm_indirizzo : null)}}</textarea>
	  		<label for="gm_lat">Latitudine</label>
	    	<input type="text" class="form-control" id="gm_lat" placeholder="41.8505419" name="gm_lat" value="{{old('gm_lat', isset($page->gm_lat) ? $page->gm_lat : null)}}">
	    	<label for="gm_long">Longitudine</label>
	    	<input type="text" class="form-control" id="gm_long" placeholder="12.45956769999998" name="gm_long" value="{{old('gm_long', isset($page->gm_long) ? $page->gm_long : null)}}">
	  	</div>
			

		<hr />
		<div class="form-group">
		<label for="caratteristiche">Listing prodotti</label>
		<div class="checkbox">
  	  <label>
  	    <input type="checkbox" id="listing" name="listing" value="1" aria-label="Offerta" @if (old('listing')==1 || (isset($prodotto->listing) && $prodotto->listing == 1) ) checked @endif> 
  	    	attiva
  	   </label>
  	</div>
  	</div>

  	<div class="form-group">
  	<label for="caratteristiche">Prodotti con caratteristiche:</label>
  	<div class="checkbox">
  	    @foreach ($caratteristiche as $key => $nome)
  	    <label>
  	      <input type="checkbox" id="{{$nome}}" name="caratteristiche[]" value="{{$key}}" aria-label="{{$nome}}" @if ( old($nome)==1 || in_array($key, $caratteristiche_associate) ) checked @endif>
  	      {{$nome}}
  	    </label>
  	    @endforeach
  	</div>
  	</div>

  	<div class="form-group">
  	<label for="categorie">Prodotti nella categoria:</label>
  	<div class="checkbox">
  	    @foreach ($categorie as $key => $nome)
  	    <label>
  	      <input type="checkbox" id="{{$nome}}" name="categorie[]" value="{{$key}}" aria-label="{{$nome}}" @if ( old($nome)==1 || in_array($key, $categorie_associate) ) checked @endif> 
  	      {{$nome}}
  	    </label>
  	    @endforeach
  	</div>
  	</div>

  	<hr />

  	<div class="form-group">
  	<label for="categorieRicette">Listing categorie ricette:</label>
  	<div class="checkbox">
  	    @foreach ($categorieRicette as $key => $nome)
  	    <label>
  	      <input type="checkbox" id="{{$nome}}" name="categorieRicette[]" value="{{$key}}" aria-label="{{$nome}}" @if ( old($nome)==1 || in_array($key, $categorieRicette_associate) ) checked @endif> 
  	      {{$nome}}
  	    </label>
  	    @endforeach
  	</div>
  	</div>
		
		<button type="submit" class="btn btn-primary">{{ $page->exists ? 'Modifica' : 'Salva'}}</button>

	</form>

@stop


@section('script')
	<script>
	     $(document).ready(function(){

	         $('#titolo').blur(function(event){
	             
	           uri = $("#uri");

	           if (uri.val() == '') {

	             val = $(this).val();
	             
	             $.ajax({
	               url: '<?=url("admin/pages/uri_ajax") ?>',
	               type: "post",
	               data : { 
	                 'value': val,
	                 '_token': '{{ csrf_token() }}'
	               },
	               success: function(data) {
	                 uri.val(data);
	               }
	             });
	           
	           }

	         });

	        $("#content").summernote({
              height:500,
              toolbar: [
                 // [groupName, [list of button]]
                 ['Insert', ['picture', 'link', 'video', 'table','hr']],
                 ['style', ['bold', 'italic', 'underline','strikethrough', 'clear']],
                 ['fontsize', ['fontsize']],
                 ['fontname', ['fontname']],
                 ['color', ['color']],
                 ['para', ['ul', 'ol', 'paragraph']],
                 ['height', ['height']],
                 ['Misc',['fullscreen','codeview']]
               ],

            });

	     });

	</script>

@stop