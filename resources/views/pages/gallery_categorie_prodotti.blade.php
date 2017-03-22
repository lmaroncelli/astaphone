<!-- Place somewhere in the <body> of your page -->
<div id="carousel" class="flexslider">
  <ul class="slides">
    @foreach ($slide_categorie_prodotti->immagini as $immagine)
      @if ($immagine->nome != '')
        <li>
          <img src="{{ url('images/'.$immagine->nome) }}" />
        </li>
      @endif
    @endforeach
    <!-- items mirrored twice -->
  </ul>
</div>
<div id="slider" class="flexslider">
  <ul class="slides">
    @foreach ($slide_categorie_prodotti->immagini as $immagine)
      @if ($immagine->nome != '')
        <li>
          <img src="{{ url('images/'.$immagine->nome) }}" />
           <p class="flex-caption">{{$immagine->descrizione}}</p>
        </li>
      @endif
    @endforeach
    <!-- items mirrored twice -->
  </ul>
</div>