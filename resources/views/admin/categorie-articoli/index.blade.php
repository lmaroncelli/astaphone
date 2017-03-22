@extends('admin.layouts.backend')

@section('title')
	Categorie Articoli
@stop

@section('content')
	
	<a href="{{ route('categorie-articoli.create') }}" class="btn btn-primary" title="Crea una nuova categoria">Nuova</a>
	<table class="table table-striped">
       <thead>
           <tr>
               <th>Nome</th> 
               <th>Edit</th> 
               <th>Delete</th> 
           </tr>
        </thead>
        <tbody> 
			@if (count($categorieArticoli))
	           @foreach ($categorieArticoli as $count => $categoria)
	               <tr>
                     <td>{{$categoria->nome}}</td>
                     <td><a href="{{ route('categorie-articoli.edit',$categoria->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
	                   <td><a href="{{ route('categorie-articoli.confirm',$categoria->id) }}"><span class="glyphicon glyphicon-trash"></span></a></td>
	               </tr>
	           @endforeach
			@else
				<tr><td colspan="11">Nessuna categoria</td></tr>
			@endif
    </tbody> 
</table>

@stop