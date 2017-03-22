@extends('layouts.frontend')

@section('title')
	Il tuo carrello
@stop

@section('content')

    <table class="table table-hover">
        <thead>
        <tr>
            <th>Prodotti</th>
            <th>Prezzo</th>
            <th class="text-center">Q.tà</th>
            <th></th>
            <th class="text-center">Totale</th>
            <th> </th>
        </tr>
        </thead>
        <tbody>
        @foreach($prodottiCarrello as $prodottoCarrello)
            <tr>
                <td class="col-sm-8 col-md-6">
                    <div class="media">
                			Immagine del prodotto
                			<div class="media-body">
                          <h4 class="media-heading"><a href="#">{{$prodottoCarrello->prodotto->nome}}</a></h4>
                      </div>        
                    </div>
                </td>
                <td class="col-sm-1 col-md-1 text-center"><strong>€ {{$prodottoCarrello->prezzo}}</strong></td>
                <td class="col-sm-1 col-md-1" style="text-align: center">{{$prodottoCarrello->numero}}</td>
                <td class="col-sm-1 col-md-1">
                    <select name="qty" id="qty" class="change_qty" data-id="{{$prodottoCarrello->id}}" class="form-control" title="Quantità">
                        <option value="1">quantità</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </td>
                <td class="col-sm-1 col-md-1 text-center">€ {{$prodottoCarrello->prezzo * $prodottoCarrello->numero}}</td>
                <td class="col-sm-1 col-md-1">
                    <a href="{{ route('carrello.remove', $prodottoCarrello->id )}} "> <button type="button" class="btn btn-danger">
                            <span class="fa fa-remove"></span> Remove
                        </button>
                    </a>
                </td>
            </tr>
        @endforeach

        <tr>
            <td>   </td>
            <td>   </td>
            <td>   </td>
            <td><h3>Total</h3></td>
            <td colspan="2" class="text-left"><h3><strong>€ {{$total}}</strong></h3></td>
        </tr>
        <tr>
            <td>   </td>
            <td>   </td>
            <td>   </td>
            <td>
                <a href="/"> <button type="button" class="btn btn-default">
                        <span class="fa fa-shopping-cart"></span> Continue Shopping
                    </button>
                </a></td>
            <td>
                <a href="{{ route('checkout') }}" class="btn btn-success">
                    Checkout <span class="fa fa-play"></span>
                </a></td>
        </tr>
        </tbody>
    </table>
	     
@stop

@section('script')

    <script type="text/javascript">

    $(".change_qty").change(function(event) {


        event.preventDefault();

        var qty = $(this).val();

        var prodottoCarrelloId = $(this).data('id');
        
        
        
        var data = {
                    prodottoCarrelloId: prodottoCarrelloId, 
                    qty: qty 
                    };

        $.ajax({
        
            url: "{{ url('update-carrello-qty') }}",
            type: 'GET',
            data: data,
            success: function(msg) {
            
                location.reload();
            
            }
        
        });

    });
    </script>
@stop