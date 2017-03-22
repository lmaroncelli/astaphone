@extends('admin.layouts.backend')

@section('title')
	Pagine
@stop

@section('content')
	
	<a href="{{ route('pages.create') }}" class="btn btn-primary" title="Crea una nuova pagina">Nuova</a>
	<table class="table table-striped">
       <thead>
           <tr>
               <th>Titolo</th> 
               <th></th> 
               <th>Edit</th> 
               <th>Delete</th> 
           </tr>
        </thead>
        <tbody> 
			@if (count($pages))
	           @foreach ($pages as $count => $page)
	               <tr>
	                   <td><a href="{{ url($page->uri) }}" target="_blank">{{$page->title}}</a></td>
	                   <td>@if ($page->inMenu) <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>@endif</td>
	                   <td><a href="{{ route('pages.edit',$page->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
	                   <td><a href="{{ route('pages.confirm',$page->id) }}"><span class="glyphicon glyphicon-trash"></span></a></td>
	               </tr>
	           @endforeach
			@else
				<tr><td colspan="">Nessuna pagina</td></tr>
			@endif
    </tbody> 
</table>

@stop