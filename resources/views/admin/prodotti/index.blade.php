@extends('admin.layouts.backend')

@section('title')
	Prodotti
@stop

@section('content')
	
	<a href="{{ route('prodotti.create') }}" class="btn btn-primary" title="Crea un nuovo prodotto">Nuovo</a>
	<table class="table table-striped">
       <thead>
           <tr>
               <th>Codice</th> 
               <th>Nome</th> 
               <th>Disponibile</th> 
               <th>Scadenza</th> 
               <th>Prezzo</th> 
               <th>Prezzo Offerta</th> 
               <th>Novità</th> 
               <th>Offerta</th> 
               <th>Visibile</th> 
               <th>Edit</th> 
               <th>Delete</th> 
           </tr>
        </thead>
        <tbody> 
			@if (count($prodotti))
	           @foreach ($prodotti as $count => $prodotto)
	               <tr>
	                   <td><a href="{{ route('prodotti.edit',$prodotto->id) }}">{{$prodotto->codice}}</a></td>
                     <td>{{$prodotto->codice}}</td>
                     <td>{{$prodotto->disponibile}}</td>
                     <td>{{$prodotto->scadenza}}</td>
                     <td>{{$prodotto->prezzo}}</td>
                     <td>{{$prodotto->prezzo_offerta}}</td>
                     <td>{{$prodotto->novita}}</td>
                     <td>{{$prodotto->offerta}}</td>
	                   <td>{{$prodotto->visibile}}</td>
                     <td><a href="{{ route('prodotti.edit',$prodotto->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
	                   <td><a href="{{ route('prodotti.confirm',$prodotto->id) }}"><span class="glyphicon glyphicon-trash"></span></a></td>
	               </tr>
	           @endforeach
			@else
				<tr><td colspan="11">Nessun prdotto</td></tr>
			@endif
    </tbody> 
</table>

@stop