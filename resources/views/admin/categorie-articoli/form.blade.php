@extends('admin.layouts.backend')

@section('css')
	<link href="/css/supernote.css" rel="stylesheet">
@stop

@section('title')
	{{ $categoria->exists ? 'Modifica Categoria' : 'Nuova Categoria'}}
@stop

@section('content')
  

  @if ($categoria->exists)
    <form  method="POST" action="{{ route('categorie-articoli.update', $categoria->id) }}" enctype="multipart/form-data">
    {{ method_field('PUT') }}
  @else
    <form  method="POST" action="{{ route('categorie-articoli.store') }}" enctype="multipart/form-data">
  @endif
    
    {{ csrf_field() }}
      

      <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" placeholder="Titolo" name="nome" value="{{old('nome', isset($categoria->nome) ? $categoria->nome : null)}}">
      </div>
      

      {{-- DESCRIZIONE !!!! --}}

		<button type="submit" class="btn btn-primary">{{ $categoria->exists ? 'Modifica' : 'Salva'}}</button>

	</form>

@stop