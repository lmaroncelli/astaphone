@extends('admin.layouts.backend')


@section('title')
	{{ $galleria->exists ? 'Modifica Galleria' : 'Nuova Galleria'}}
@stop

@section('content')
  

  @if ($galleria->exists)
    <form  method="POST" action="{{ route('gallerie.update', $galleria->id) }}">
    {{ method_field('PUT') }}
  @else
    <form  method="POST" action="{{ route('gallerie.store') }}">
  @endif
    
    {{ csrf_field() }}

  <div class="form-group">
    <label for="titolo">Titolo</label>
    <input type="text" class="form-control" id="titolo" placeholder="Titolo" name="titolo" value="{{old('titolo', isset($galleria->titolo) ? $galleria->titolo : null)}}">
  </div>
      
       
		<button type="submit" class="btn btn-primary">{{ $galleria->exists ? 'Modifica' : 'Salva'}}</button>

	</form>

@stop


