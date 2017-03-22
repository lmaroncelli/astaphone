@extends('admin.layouts.backend')

@section('css')
	<link href="/css/supernote.css" rel="stylesheet">
@stop

@section('title')
	{{ $articolo->exists ? 'Modifica Articolo' : 'Nuova Articolo'}}
@stop

@section('content')
	

	@if ($articolo->exists)
		<form  method="POST" action="{{ route('articoli.update', $articolo->id) }}">
		{{ method_field('PUT') }}
	@else
		<form  method="POST" action="{{ route('articoli.store') }}">
	@endif
		
		{{ csrf_field() }}
		  
      <div class="form-group">
        <label for="codice">Categoria</label>
        <select class="form-control" name="categoria_id">
          @foreach ($categorie as $key => $nome)
            <option value="{{$key}}" @if( old('categoria_id') == $key || (isset($articolo->categoria_id) && $articolo->categoria_id == $key)) selected @endif>{{$nome}}</option>
          @endforeach
        </select>
      </div>

	  	<div class="form-group">
	    	<label for="titolo">Titolo</label>
	    	<input type="text" class="form-control" id="titolo" placeholder="Titolo" name="titolo" value="{{old('titolo', isset($articolo->titolo) ? $articolo->titolo : null)}}">
	  	</div>

		<div class="form-group">
		  	<label for="nome">Testo</label>
	  		<textarea class="form-control" rows="3" name="corpo" id="corpo">{{old('corpo', isset($articolo->corpo) ? $articolo->corpo : null)}}</textarea>
		</div>

    <div class="form-group">
      <label for="nome">Slug</label>
      <input type="text" class="form-control" id="slug" placeholder="Slug" name="slug" value="{{old('slug', isset($articolo->slug) ? $articolo->slug : null)}}">
    </div>

		<button type="submit" class="btn btn-primary">{{ $articolo->exists ? 'Modifica' : 'Salva'}}</button>

	</form>

@stop


@section('script')
	<script>
	     $(document).ready(function(){

	        $('#corpo').summernote({
              height:250,
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