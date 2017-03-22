@extends('layouts.frontend')

@section('title')
	Ciao {{$user->email}}
@stop
		

@section('content')
	<div class="row">
	  <div class="col-md-8 col-md-offset-2">

				<h2>I tuoi ordini</h2>
	
				<hr/>
				
				@foreach ($user->ordini()->orderBy('created_at','desc')->get() as $ordine)
				
					<div class="panel panel-default">
					  <div class="panel-heading">Ordine #{{$ordine->id}} del {{$ordine->created_at}}</div>
					  <div class="panel-body">
					    <ul class="list-group">
					    	@foreach ($ordine->prodotti as $prodottoOrdine)

					      	<li class="list-group-item">
					      		n. {{$prodottoOrdine->numero}} {{$prodottoOrdine->prodotto->nome}} <span class="badge">€ {{$prodottoOrdine->prezzo*$prodottoOrdine->numero}}</span>
					      	</li>
					    
					    	@endforeach
					    </ul>
					  </div>
					  <div class="panel-footer"><strong>Totale </strong>€ {{$ordine->totale}}</div>
					</div>
				
				@endforeach
	
	  </div>
	 </div>

@stop