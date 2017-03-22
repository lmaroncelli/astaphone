@extends('admin.layouts.backend')

@section('css')
	<link href="/css/supernote.css" rel="stylesheet">
@stop

@section('title')
	{{ $ricetta->exists ? 'Modifica Ricetta' : 'Nuova Ricetta'}}
@stop

@section('content')
  

  @if ($ricetta->exists)
    <form  method="POST" action="{{ route('ricette.update', $ricetta->id) }}" enctype="multipart/form-data">
    {{ method_field('PUT') }}
  @else
    <form  method="POST" action="{{ route('ricette.store') }}" enctype="multipart/form-data">
  @endif
    
    {{ csrf_field() }}
      
      <div class="form-group">
        <label for="codice">Categoria</label>
        <select class="form-control" name="categoria_id">
          @foreach ($categorie as $key => $nome)
            <option value="{{$key}}" @if( old('categoria_id') == $key || (isset($ricetta->categoria_id) && $ricetta->categoria_id == $key)) selected @endif>{{$nome}}</option>
          @endforeach
        </select>
      </div>
      
      <div class="form-group">
        <label for="titolo">Foto</label>
        <input type="file" class="form-control" id="foto" name="foto">
      </div>

      @if ($ricetta->exists && $ricetta->foto != '' && !is_null($ricetta->foto))
        <div class="form-group">
        <img src="{{ url('images/'.$ricetta->foto) }}" width="250" height="200">
        <label>
        <input type="checkbox" id="elimina_immagine" name="elimina_immagine" value="1" aria-label="Elimina Immagine"> 
          Elimina immagine
       </label>
        </div>
      @endif

      <div class="form-group">
        <label for="titolo">Titolo</label>
        <input type="text" class="form-control" id="titolo" placeholder="Titolo" name="titolo" value="{{old('titolo', isset($ricetta->titolo) ? $ricetta->titolo : null)}}">
      </div>

      <div class="form-group">
        <label for="nome">URI</label>
        <input type="text" class="form-control" id="uri" placeholder="URI" name="uri" value="{{old('uri', isset($ricetta->uri) ? $ricetta->uri : null)}}">
      </div>


    <div class="form-group">
        <label for="nome">Descrizione</label>
        <textarea class="form-control" rows="3" name="descrizione" id="descrizione">{{old('descrizione', isset($ricetta->descrizione) ? $ricetta->descrizione : null)}}</textarea>
    </div>

    <div class="form-group">
        <label for="nome">Ingredienti</label>
        <textarea class="form-control" rows="3" name="ingredienti" id="ingredienti">{{old('ingredienti', isset($ricetta->ingredienti) ? $ricetta->ingredienti : null)}}</textarea>
    </div>

    <div class="form-group">
        <label for="nome">Preparazione</label>
        <textarea class="form-control" rows="3" name="preparazione" id="preparazione">{{old('preparazione', isset($ricetta->preparazione) ? $ricetta->preparazione : null)}}</textarea>
    </div>

  	<div class="checkbox">
  	  <label>
  	    <input type="checkbox" id="visibile" name="visibile" value="1" aria-label="Visibile" @if ( old('visibile')==1 || (isset($ricetta->visibile) && $ricetta->visibile == 1) ) checked @endif> 
  	    	Visibile
  	   </label>
  	</div>


		<button type="submit" class="btn btn-primary">{{ $ricetta->exists ? 'Modifica' : 'Salva'}}</button>

	</form>

@stop


@section('script')
	<script>
	     $(document).ready(function(){



	        $('#descrizione').summernote({
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

	        $('#ingredienti').summernote({
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


	        $('#preparazione').summernote({
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