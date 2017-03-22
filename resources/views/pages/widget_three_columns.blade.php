<div class="row">
  @for ($i = 1; $i <=3 ; $i++)
    <?php 
      $img = 'img_'.$i;
      $desc = 'desc_'.$i;
      $titolo = 'titolo_'.$i;
      $url = 'url_pagina_'.$i;
    ?>
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        <div class="caption">
          <img src="{{ url('images/'.$widgetThreeColumns->$img) }}" class="img-circle" width="242" height="200">
          <h3>{{$widgetThreeColumns->$titolo}}</h3>
          <p>{{ $widgetThreeColumns->$desc }}</p>
          <p><a href="{{ url($widgetThreeColumns->$url) }}" class="btn btn-default" role="button">LEGGI TUTTO</a></p>
        </div>
      </div>
    </div>
  @endfor
</div>