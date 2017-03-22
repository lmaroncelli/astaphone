@extends('admin.layouts.backend')

@section('css')
	<link href="/css/supernote.css" rel="stylesheet">
@stop

@section('title')
	{{ $widget->exists ? 'Modifica widget' : 'Nuovo widget'}}
@stop

@section('content')
	

	@if ($widget->exists)
		<form  method="POST" action="{{ route('slide-prodotti-widget.update', $widget->id) }}">
		{{ method_field('PUT') }}
	@else
		<form  method="POST" action="{{ route('slide-prodotti-widget.store') }}">
	@endif
		
		{{ csrf_field() }}
		

		<div class="form-group">
    	<label for="nome">Nome</label>
    	<input type="text" class="form-control" id="nome" placeholder="widget prodotti confezionati Magliana" name="nome" value="{{old('nome', isset($widget->nome) ? $widget->nome : null)}}">
  	</div>
	  	
    <hr />
    
    <div class="form-group">
      <label for="codice">Slide</label>
      <select class="form-control" name="slide_id">
        @foreach ($slideProdotti as $key => $titolo)
          <option value="{{$key}}" @if( old('slide_id') == $key || (isset($widget->slide_id) && $widget->slide_id == $key)) selected @endif>{{$titolo}}</option>
        @endforeach
      </select>
    </div>

    <div class="form-group">
        <label for="nome">Titolo</label>
        <input type="text" class="form-control" id="titolo" placeholder="Titolo" name="titolo" value="{{old('titolo', isset($widget->titolo) ? $widget->titolo : null)}}">
    </div>
  
    <div class="form-group">
        <label for="nome">Descrizione</label>

        <textarea class="form-control" rows="3" name="descrizione" id="descrizione">{{old('descrizione', isset($widget->descrizione) ? $widget->descrizione : null)}}</textarea>
    </div>
    
    <div class="form-group">
    	<label for="nome">URL pagina</label>
    	<input type="text" class="form-control" id="url_pagina" placeholder="URI" name="url_pagina" value="{{old('url_pagina', isset($widget->url_pagina) ? $widget->url_pagina : null)}}">
  	</div>

      <div class="form-group">
        <label for="nome">URL video</label>
        <input type="text" class="form-control" id="url_video" placeholder="URI" name="url_video" value="{{old('url_video', isset($widget->url_video) ? $widget->url_video : null)}}">
      </div>
		
		<button type="submit" class="btn btn-primary">{{ $widget->exists ? 'Modifica' : 'Salva'}}</button>

	</form>

@stop


@section('script')
	<script>
	     $(document).ready(function(){

	        $("#descrizione").summernote({
              height:200,
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