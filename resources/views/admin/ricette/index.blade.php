@extends('admin.layouts.backend')

@section('title')
	Ricette
@stop

@section('content')
	
	<a href="{{ route('ricette.create') }}" class="btn btn-primary" title="Crea una nuova ricetta">Nuova</a>
	<table class="table table-striped">
       <thead>
           <tr>
               <th>Titolo</th> 
               <th>Visibile</th> 
               <th>Edit</th> 
               <th>Delete</th> 
           </tr>
        </thead>
        <tbody> 
			@if (count($ricette))
	           @foreach ($ricette as $count => $ricetta)
	               <tr>
                     <td>{{$ricetta->titolo}}</td>
	                   <td>{{$ricetta->visibile}}</td>
                     <td><a href="{{ route('ricette.edit',$ricetta->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
	                   <td><a href="{{ route('ricette.confirm',$ricetta->id) }}"><span class="glyphicon glyphicon-trash"></span></a></td>
	               </tr>
	           @endforeach
			@else
				<tr><td colspan="11">Nessuna ricetta</td></tr>
			@endif
    </tbody> 
</table>

@stop