@extends('admin.layouts.backend')

@section('title')
	Articoli
@stop

@section('content')
	
	<a href="{{ route('articoli.create') }}" class="btn btn-primary" title="Crea un nuovo articolo">Nuovo</a>
	<table class="table table-striped">
       <thead>
           <tr>
               <th>Titolo</th> 
               <th>slug</th>
               <th>Edit</th> 
               <th>Delete</th> 
           </tr>
        </thead>
        <tbody> 
			@if (count($articoli))
	           @foreach ($articoli as $count => $articolo)
	               <tr>
	                   <td><a href="{{ route('articoli.edit',$articolo->id) }}">{{$articolo->codice}}</a></td>
                     <td>{{$articolo->titolo}}</td>
                     <td>{{$articolo->slug}}</td>
                     <td><a href="{{ route('articoli.edit',$articolo->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
	                   <td><a href="{{ route('articoli.confirm',$articolo->id) }}"><span class="glyphicon glyphicon-trash"></span></a></td>
	               </tr>
	           @endforeach
			@else
				<tr><td colspan="11">Nessun articolo</td></tr>
			@endif
    </tbody> 
</table>

@stop