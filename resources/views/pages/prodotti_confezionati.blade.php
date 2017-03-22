
<div class="row prodotti_confezionati">
   <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <h3>{{$widgetProdottiConfezionati->titolo}}</h3>
          <p>{!!$widgetProdottiConfezionati->descrizione!!}</p>
          <p><a href="{{url($widgetProdottiConfezionati->url_pagina)}}" class="btn btn-default" role="button">Visualizza</a></p>
       </div>
       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <a href="{{$widgetProdottiConfezionati->url_video}}" target="_blank">Video di accoglienza</a>
       </div>
   </div>
   <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
           <ul class="bxslider">
              @foreach ($widgetProdottiConfezionati->slide->immagini as $count => $immagine)
						    <li><img src="{{ url('images/'.$immagine->nome) }}" /></li>                
              @endforeach
						</ul>
       </div>
   </div>
</div>