@extends('admin.layouts.backend')

@section('title')
	Gallerie
@stop

@section('content')
	
	<a href="{{ route('gallerie.create') }}" class="btn btn-primary" title="Crea una nuova galleria">Nuova</a>
	<table class="table table-striped">
       <thead>
           <tr>
               <th>Nome</th>
               <th>Carica</th>
               <th>Edit</th> 
               <th>Delete</th> 
           </tr>
        </thead>
        <tbody> 
			@if (count($gallerie))
	           @foreach ($gallerie as $count => $galleria)
	               <tr>
                     <td>{{$galleria->titolo}}</td>
                     <td><a href="{{ route('gallerie.carica',$galleria->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
                     <td><a href="{{ route('gallerie.edit',$galleria->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
	                 <td><a href="{{ route('gallerie.confirm',$galleria->id) }}"><span class="glyphicon glyphicon-trash"></span></a></td>
	               </tr>
	           @endforeach
			@else
				<tr><td colspan="11">Nessuna galleria</td></tr>
			@endif
    </tbody> 
</table>

@stop