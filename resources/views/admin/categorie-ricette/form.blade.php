@extends('admin.layouts.backend')

@section('css')
	<link href="/css/supernote.css" rel="stylesheet">
@stop

@section('title')
	{{ $categoria->exists ? 'Modifica Ricetta' : 'Nuova Ricetta'}}
@stop

@section('content')
  

  @if ($categoria->exists)
    <form  method="POST" action="{{ route('categorie-ricette.update', $categoria->id) }}" enctype="multipart/form-data">
    {{ method_field('PUT') }}
  @else
    <form  method="POST" action="{{ route('categorie-ricette.store') }}" enctype="multipart/form-data">
  @endif
    
    {{ csrf_field() }}
      
      <div class="form-group">
        <label for="titolo">Immagine</label>
        <input type="file" class="form-control" id="img" name="img">
      </div>

      @if ($categoria->exists && $categoria->img != '' && !is_null($categoria->img))
        <div class="form-group">
        <img src="{{ url('images/'.$categoria->img) }}" width="150" height="100">
        <label>
        <input type="checkbox" id="elimina_immagine" name="elimina_immagine" value="1" aria-label="Elimina Immagine"> 
          Elimina immagine
       </label>
        </div>
      @endif

      <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" placeholder="Titolo" name="nome" value="{{old('nome', isset($categoria->nome) ? $categoria->nome : null)}}">
      </div>

      <div class="form-group">
        <label for="nome">URI</label>
        <input type="text" class="form-control" id="uri" placeholder="URI" name="uri" value="{{old('uri', isset($categoria->uri) ? $categoria->uri : null)}}">
      </div>


		<button type="submit" class="btn btn-primary">{{ $categoria->exists ? 'Modifica' : 'Salva'}}</button>

	</form>

@stop