@extends('layouts.frontend')

@section('title')
	Il tuo carrello
@stop

@section('content')
    <h1>Checkout</h1>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Prodotti</th>
            <th>Prezzo</th>
            <th class="text-center">Q.tà</th>
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
                <td class="col-sm-1 col-md-1 text-center">€ {{$prodottoCarrello->prezzo * $prodottoCarrello->numero}}</td>
            </tr>
        @endforeach

        <tr>
            <td>   </td>
            <td>   </td>
            <td><h3>Total</h3></td>
            <td colspan="2" class="text-left"><h3><strong>€ {{$total}}</strong></h3></td>
        </tr>
        </tbody>
    </table>
    
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Acquista</div>
                <div class="panel-body">
                <form action="{{ route('checkout') }}" method="POST" id="checkout_form" class="form-horizontal">
                    {{ csrf_field() }}
                    <span class="payment-errors"></span>

                    <div class="row row-centered">
                      <div class="col-md-10">
                      
                      <div class="page-header">
                        <h2 class="gdfg">Controlla e completa l'ordine</h2>
                      </div>
                    </div>
                    </div>
                      
                      <noscript>
                      <div class="bs-callout bs-callout-danger">
                        <h4>JavaScript is not enabled!</h4>
                        <p>This payment form requires your browser to have JavaScript enabled. Please activate JavaScript and reload this page. Check <a href="http://enable-javascript.com" target="_blank">enable-javascript.com</a> for more informations.</p>
                      </div>
                      </noscript>
                
                      <fieldset>

                    <div class="panel panel-primary">
                    <div class="panel-heading">Spedizione</div>
                    <div class="panel-body">
                      
                      @if ( !is_null($user->indirizzo_spedizione) && 
                            $user->indirizzo_spedizione != '' && 
                            is_null($edit_spedizione)
                          )

                          {{-- passo indirizzo nei campi hidden --}}
                          <input type="hidden" name="nome_spedizione" value="{{$user->nome_spedizione}}">
                          <input type="hidden" name="indirizzo_spedizione" value="{{$user->indirizzo_spedizione}}">
                          <input type="hidden" name="citta_spedizione" value="{{$user->citta_spedizione}}">
                          <input type="hidden" name="provincia_spedizione" value="{{$user->provincia_spedizione}}">
                          <input type="hidden" name="cap_spedizione" value="{{$user->cap_spedizione}}">

                          {{$user->nome_spedizione}}<br>
                          {{$user->indirizzo_spedizione}}
                          {{$user->cap_spedizione}} - {{$user->citta_spedizione}} ({{$user->provincia_spedizione}})

                          <a href="{{ url('checkout') }}?edit_spedizione"><span class="label label-primary" style="float: right;">modifica</span></a>

                      @else
                        
                        <!-- Nome -->
                        <div class="row">
                        <div class="form-group">
                          <label class="col-sm-4 control-label" for="textinput">Nome</label>
                          <div class="col-sm-6">
                            <input type="text" id="nome_spedizione" name="nome_spedizione" placeholder="Nome" class="nome_spedizione form-control" value="{{old('nome_spedizione', isset($user->nome_spedizione) ? $user->nome_spedizione : null)}}">
                          </div>
                        </div>
                        </div>

                        <!-- Street -->
                        <div class="row">
                        <div class="form-group">
                          <label class="col-sm-4 control-label" for="textinput">Indirizzo</label>
                          <div class="col-sm-6">
                            <input type="text" id="indirizzo_spedizione" name="indirizzo_spedizione" placeholder="Indirizzo" class="indirizzo_spedizione form-control" value="{{old('indirizzo_spedizione', isset($user->indirizzo_spedizione) ? $user->indirizzo_spedizione : null)}}">
                          </div>
                        </div>
                        </div>
                        
                        <!-- City -->
                        <div class="row">
                        <div class="form-group">
                          <label class="col-sm-4 control-label" for="textinput">Città</label>
                          <div class="col-sm-6">
                            <input type="text" id="citta_spedizione" name="citta_spedizione" placeholder="Città" class="citta_spedizione form-control" value="{{old('citta_spedizione', isset($user->citta_spedizione) ? $user->citta_spedizione : null)}}">
                          </div>
                        </div>
                        </div>

                        <!-- State -->
                        <div class="row">
                        <div class="form-group">
                          <label class="col-sm-4 control-label" for="textinput">Provincia</label>
                          <div class="col-sm-6">
                            <input type="text" id="provincia_spedizione" name="provincia_spedizione" maxlength="65" placeholder="Provincia" class="provincia_spedizione form-control" value="{{old('provincia_spedizione', isset($user->provincia_spedizione) ? $user->provincia_spedizione : null)}}">
                          </div>
                        </div>
                        </div>
                        
                        <!-- Postcal Code -->
                        <div class="row">
                        <div class="form-group">
                          <label class="col-sm-4 control-label" for="textinput">CAP</label>
                          <div class="col-sm-6">
                            <input type="text" id="cap_spedizione" name="cap_spedizione" data-stripe="address_zip" maxlength="9" placeholder="CAP" class="cap_spedizione form-control" value="{{old('cap_spedizione', isset($user->cap_spedizione) ? $user->cap_spedizione : null)}}">
                          </div>
                        </div>
                        </div>

                      @endif
                      </div>
                      </div>



                      <hr>
                      <hr>
                      
                      <div class="panel panel-danger">
                      <div class="panel-heading">Fatturazione</div>
                      <div class="panel-body">

                      <!-- Nome -->
                      <div class="row">
                      <div class="form-group">
                        <label class="col-sm-4 control-label" for="textinput">Nome</label>
                        <div class="col-sm-6">
                          <input type="text" id="nome_fatturazione" name="nome_fatturazione" placeholder="Nome" class="nome_fatturazione form-control" value="{{old('nome_fatturazione', isset($user->nome_fatturazione) ? $user->nome_fatturazione : null)}}">
                        </div>
                      </div>
                      </div>

                      <!-- Street -->
                      <div class="row">
                      <div class="form-group">
                        <label class="col-sm-4 control-label" for="textinput">Indirizzo</label>
                        <div class="col-sm-6">
                          <input type="text" id="indirizzo_fatturazione" name="indirizzo_fatturazione" placeholder="Indirizzo" class="indirizzo_fatturazione form-control" value="{{old('indirizzo_fatturazione', isset($user->indirizzo_fatturazione) ? $user->indirizzo_fatturazione : null)}}">
                        </div>
                      </div>
                      </div>
                      
                      <!-- City -->
                      <div class="row">
                      <div class="form-group">
                        <label class="col-sm-4 control-label" for="textinput">Città</label>
                        <div class="col-sm-6">
                          <input type="text" id="citta_fatturazione" name="citta_fatturazione" placeholder="Città" class="citta_fatturazione form-control" value="{{old('citta_fatturazione', isset($user->citta_fatturazione) ? $user->citta_fatturazione : null)}}">
                        </div>
                      </div>
                      </div>

                      <!-- State -->
                      <div class="row">
                      <div class="form-group">
                        <label class="col-sm-4 control-label" for="textinput">Provincia</label>
                        <div class="col-sm-6">
                          <input type="text" id="provincia_fatturazione" name="provincia_fatturazione" maxlength="65" placeholder="Provincia" class="provincia_fatturazione form-control" value="{{old('provincia_fatturazione', isset($user->provincia_fatturazione) ? $user->provincia_fatturazione : null)}}">
                        </div>
                      </div>
                      </div>
                      
                      <!-- Postcal Code -->
                      <div class="row">
                      <div class="form-group">
                        <label class="col-sm-4 control-label" for="textinput">CAP</label>
                        <div class="col-sm-6">
                          <input type="text" id="cap_fatturazione" name="cap_fatturazione" data-stripe="address_zip" maxlength="9" placeholder="CAP" class="cap_fatturazione form-control" value="{{old('cap_fatturazione', isset($user->cap_fatturazione) ? $user->cap_fatturazione : null)}}">
                        </div>
                      </div>
                      </div>
                      
                      </div>
                      </div>


                      
                      
                      <!-- Email -->
                      <div class="row">
                      <div class="form-group">
                        <label class="col-sm-4 control-label" for="textinput">Email</label>
                        <div class="col-sm-6">
                          <input type="text" id="email" name="email" maxlength="65" placeholder="Email" value="{{old('email', isset(auth()->user()->email) ? auth()->user()->email : null)}}" class="email form-control">
                        </div>
                      </div>
                      </div>
                      </fieldset>

                      <fieldset>
                        
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h3 class="panel-title">Medoto di pagamento</h3>
                        </div>
                        <div class="panel-body">

                        @if (is_null($customer) || !is_null($edit_pagamento))

                          <!-- Card Holder Name -->
                            <div class="row">
                            <div class="form-group">
                              <label class="col-sm-4 control-label"  for="textinput">Card Holder's Name</label>
                              <div class="col-sm-6">
                                <input type="text" id="cardholdername" maxlength="70" placeholder="Card Holder Name" class="card-holder-name form-control">
                              </div>
                            </div>
                            </div>
                            
                            <!-- Card Number -->
                            <div class="row">
                            <div class="form-group">
                              <label class="col-sm-4 control-label" for="textinput">Card Number</label>
                              <div class="col-sm-6">
                                <input type="text" id="cardnumber" data-stripe="number" maxlength="19" placeholder="Card Number" class="card-number form-control">
                              </div>
                            </div>
                            </div>
                            
                            <!-- Expiry-->
                            <div class="row">
                            <div class="form-group">
                              <label class="col-sm-4 control-label" for="textinput">Card Expiry Date</label>
                              <div class="col-sm-6">
                                <div class="form-inline">
                                  <select id="select2" data-stripe="exp-month" class="card-expiry-month stripe-sensitive required form-control">
                                    <option value="01" selected="selected">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                  </select>
                                  <span> / </span>
                                  <select id="select2" data-stripe="exp-year" class="card-expiry-year stripe-sensitive required form-control">
                                  </select>
                                   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
                                  <script type="text/javascript">
                                    var select = $(".card-expiry-year"),
                                    year = new Date().getFullYear();
                         
                                    for (var i = 0; i < 12; i++) {
                                        select.append($("<option value='"+(i + year)+"' "+(i === 0 ? "selected" : "")+">"+(i + year)+"</option>"))
                                    }
                                    </script> 
                                </div>
                              </div>
                            </div>
                            </div>
                            
                            <!-- CVV -->
                            <div class="row">
                            <div class="form-group">
                              <label class="col-sm-4 control-label" for="textinput">CVV/CVV2</label>
                              <div class="col-sm-3">
                                <input type="text" id="cvv"  data-stripe="cvc" placeholder="CVV" maxlength="4" class="card-cvc form-control">
                              </div>
                            </div>
                            </div>
                        
                        @else

                          <?php $card = $customer->sources->data[0]; ?>
                         
                        
                              {{$card->brand}} termina con {{$card->last4}}<br>
                              in scadenza il {{$card->exp_month}}/{{$card->exp_year}}

                              <input type="hidden" name="customer_exists" value="1">

                              <a href="{{ url('checkout') }}?edit_pagamento"><span class="label label-primary" style="float: right;">modifica</span></a>
                            
                        @endif
                        
                        </div>
                      </div>
                    
                        
                        <!-- Submit -->
                        <div class="row">
                        <div class="control-group">
                          <div class="controls">
                            <center>
                               <button type="submit" class="btn btn-primary" id="compra">Compra</button>
                            </center>
                          </div>
                        </div>
                        </div>

                      </fieldset>
                     
                    </form>
                  </div>
              </div>
            </div>
        </div>
    </div>

@stop

@if (is_null($customer))

@section('script')
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>

    <script type="text/javascript">
        

        try {
            Stripe.setPublishableKey("{{config('services.stripe.key')}}");
        }
        catch(err) {
            alert('ATTEZIONE: '+err.message);
        }


       $(function() {
         var $form = $('#checkout_form');
         $form.submit(function(event) {

           // Disable the submit button to prevent repeated clicks:
           $form.find('.submit').prop('disabled', true);

           // Request a token from Stripe:
           Stripe.card.createToken($form, stripeResponseHandler);

           // Prevent the form from being submitted:
           return false;
         });
       });

       function stripeResponseHandler(status, response) {
         // Grab the form:
         var $form = $('#checkout_form');

         if (response.error) { // Problem!

           // Show the errors on the form:
           $form.find('.payment-errors').text(response.error.message);
           $form.find('.submit').prop('disabled', false); // Re-enable submission

         } else { // Token was created!

           // Get the token ID:
           var token = response.id;

           // Insert the token ID into the form so it gets submitted to the server:
           $form.append($('<input type="hidden" name="stripeToken">').val(token));

           // Submit the form:
           $form.get(0).submit();
         }
       };

    </script>
@stop

@endif