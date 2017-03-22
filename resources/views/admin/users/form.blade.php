@extends('admin.layouts.backend')

@section('title')
	{{ $user->exists ? 'Modifica Utente' : 'Crea Utente'}}
@stop

@section('content')
	
	{{-- 
	
	What everyone seems to be missing is that if you are not using the laravelcollective/html package you can easily do this by taking advantage of the fact that old() takes a default parameter.  value="{{ old('my-input', $default-my-input) }}"

	so:
	value="{{ old('my-input',  isset($post->title) ? $post->title : null) }}" 

	 --}}

	@if ($user->exists)
		<form method="POST" action="{{ route('users.update',$user->id) }}">
		{{ method_field('PUT') }}
	@else
		<form method="POST" action="{{ route('users.store') }}">
	@endif
		{{ csrf_field() }}
		<div class="form-group">
	    <label for="nome">Nome</label>
	    <input type="text" class="form-control" id="nome" placeholder="Nome" name="name" value="{{old('name', isset($user->name) ? $user->name : null)}}">
	  </div>

  	<div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{old('email', isset($user->email) ? $user->email : null)}}">
    </div>

    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>

    <div class="form-group">
      <label for="password_confirmation">Password Repeat</label>
      <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
    </div>
		

		<button type="submit" class="btn btn-primary">{{ $user->exists ? 'Modifica' : 'Salva'}}</button>

	</form>

@stop