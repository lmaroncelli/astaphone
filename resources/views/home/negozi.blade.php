  <div class="row negozi">
  @foreach (['magliana','cipro','tiburtina'] as $count => $negozio)
    <?php 
      $img = 'img_'.$negozio;
      $desc = 'desc_'.$negozio;
      if ($count == 0) 
        {
        $class= "slideInLeft";
        } 
      elseif($count == 1) 
        {
        $class= "";
        
        }
      else 
        {
        $class= "slideInRight";
        }
      
    ?>
    
    <div class="col-sm-4 wow {{$class}} text-center">
      <?php
      if($count == 0) {
        $choise = "Lab";
      }
      elseif ($count == 1) {
        $choise = "Shop";
      } else {
        $choise = "Tiburtina";
      }
      ?>
      
      <img class="img-responsive rotate" src="{{ url('images/'.$homepage->$img) }}" alt="{{$choise}}">
      <h3> Celiachiamo {{$choise}} </h3>
      <p class="lead">{{ $homepage->$desc }}</p>
      <p><a class="btn btn-embossed btn-primary view" role="button">Visualizza</a></p>
    </div><!-- /.col-lg-4 -->
   @endforeach
</div><!-- /.row -->