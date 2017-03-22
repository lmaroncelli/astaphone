@extends('admin.layouts.backend')

@section('title')
	Widget Slide Prodotti
@stop

@section('content')
	
	<a href="{{ route('slide-prodotti-widget.create') }}" class="btn btn-primary" title="Crea un nuovo widget">Nuovo</a>
	<table class="table table-striped">
       <thead>
           <tr>
               <th>Nome</th> 
               <th>Edit</th> 
               <th>Delete</th> 
           </tr>
        </thead>
        <tbody> 
			@if (count($widgets))
	           @foreach ($widgets as $count => $widget)
	               <tr>
	                   <td>{{$widget->nome}}</td>
	                   <td><a href="{{ route('slide-prodotti-widget.edit',$widget->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
	                   <td><a href="{{ route('slide-prodotti-widget.confirm',$widget->id) }}"><span class="glyphicon glyphicon-trash"></span></a></td>
	               </tr>
	           @endforeach
			@else
				<tr><td colspan="">Nessun widget</td></tr>
			@endif
    </tbody> 
</table>

@stop