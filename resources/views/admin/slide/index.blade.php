@extends('admin.layouts.backend')

@section('title')
	Slide
@stop

@section('content')
	
	<a href="{{ route('slide.create') }}" class="btn btn-primary" title="Crea una nuova slide">Nuova</a>
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
                     <td><a href="{{ route('slide.edit',$s->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
	                 <td><a href="{{ route('slide.confirm',$s->id) }}"><span class="glyphicon glyphicon-trash"></span></a></td>
	               </tr>
	           @endforeach
			@else
				<tr><td colspan="11">Nessuna slide</td></tr>
			@endif
    </tbody> 
</table>

@stop