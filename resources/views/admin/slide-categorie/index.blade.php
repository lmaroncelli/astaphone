@extends('admin.layouts.backend')

@section('title')
	Slide categorie prodotti
@stop

@section('content')
	
	<a href="{{ route('slide-categorie.create') }}" class="btn btn-primary" title="Crea una nuovo widget">Nuova</a>
	<table class="table table-striped">
       <thead>
           <tr>
               <th>Nome</th> 
               <th>Edit</th> 
               <th>Delete</th> 
           </tr>
        </thead>
        <tbody> 
			@if (count($slide))
	           @foreach ($slide as $count => $s)
	               <tr>
	                   <td>{{$s->titolo}}</td>
	                   <td><a href="{{ route('slide-categorie.edit',$s->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
	                   <td><a href="{{ route('slide-categorie.confirm',$s->id) }}"><span class="glyphicon glyphicon-trash"></span></a></td>
	               </tr>
	           @endforeach
			@else
				<tr><td colspan="">Nessuna slide</td></tr>
			@endif
    </tbody> 
</table>

@stop