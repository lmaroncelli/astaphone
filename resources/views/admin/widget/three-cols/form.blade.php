@extends('admin.layouts.backend')

@section('css')
	<link href="/css/supernote.css" rel="stylesheet">
@stop

@section('title')
	{{ $widget->exists ? 'Modifica widget' : 'Nuovo widget'}}
@stop

@section('content')
	

	@if ($widget->exists)
		<form  method="POST" action="{{ route('three-cols-widget.update', $widget->id) }}" enctype="multipart/form-data">
		{{ method_field('PUT') }}
	@else
		<form  method="POST" action="{{ route('three-cols-widget.store') }}" enctype="multipart/form-data">
	@endif
		
		{{ csrf_field() }}
		

		<div class="form-group">
    	<label for="nome">Nome</label>
    	<input type="text" class="form-control" id="nome" placeholder="widget prodotti confezionati Magliana" name="nome" value="{{old('nome', isset($widget->nome) ? $widget->nome : null)}}">
  	</div>
	  	
    <hr />
    

    {{-- 3 elementi --}}
    
      <div id="exTab2"> 

        <ul class="nav nav-tabs">
          <li class="active">
            <a  href="#1" data-toggle="tab">Elemento 1</a>
          </li>
          <li><a href="#2" data-toggle="tab">Elemento 2</a>
          </li>
          <li><a href="#3" data-toggle="tab">Elemento 3</a>
          </li>
        </ul>

        <div class="tab-content">
          
          @for ($i = 1; $i <=3;  $i++)
          <?php 
          $img = "img_$i";
          $titolo = "titolo_$i";
          $desc = "desc_$i";
          $url_pagina = "url_pagina_$i";
          ($i==1) ? $class_active='active' : $class_active=''; 
          ?>
          <div class="tab-pane {{$class_active}}" id="{{$i}}">
            <h3>Inserisci i dati per l'elemento n. {{$i}}</h3>
            <p>
              @if (is_null($widget->$img) || $widget->$img == '')
                <div class="form-group">
                  <label for="titolo">Immagine</label>
                  <input type="file" class="form-control" id="img" name="img_{{$i}}">
                </div>
              @else
                <img src="{{ url('images/'.$widget->$img) }}" width="100" height="50">
                <button type="button" class="btn btn-default delete_image_negozio" data-colname="img_{{$i}}">
                  <span class="glyphicon glyphicon-remove"></span>
                </button>
              @endif
              
              <div class="form-group">
                  <label for="nome">Titolo</label>
                <input type="text" class="form-control" id="{{$titolo}}" placeholder="Titolo" name="{{$titolo}}" value="{{old('$titolo', isset($widget->$titolo) ? $widget->$titolo : null)}}">
              </div>
              
              <div class="form-group">
                <label for="titolo">Descrizione</label>
                <textarea class="form-control" rows="3" name="desc_{{$i}}">{{old('desc_$i', isset($widget->$desc) ? $widget->$desc : null)}}</textarea>
              </div>

                <div class="form-group">
                  <label for="nome">URL pagina</label>
                <input type="text" class="form-control" id="{{$url_pagina}}" placeholder="URI" name="{{$url_pagina}}" value="{{old('$url_pagina', isset($widget->$url_pagina) ? $widget->$url_pagina : null)}}">
                </div>
            </p>
          </div>
          @endfor

      
        </div> {{-- //.tab-content --}}
       
    </div> {{-- end exTab2 --}}

    {{--  FINE 3 elementi --}}
		
		<button type="submit" class="btn btn-primary">{{ $widget->exists ? 'Modifica' : 'Salva'}}</button>

	</form>

@stop


@section('script')
	<script>
	     $(document).ready(function(){

	        $("#descrizione").summernote({
              height:200,
              toolbar: [
                 // [groupName, [list of button]]
                 ['Insert', ['picture', 'link', 'video', 'table','hr']],
                 ['style', ['bold', 'italic', 'underline','strikethrough', 'clear']],
                 ['fontsize', ['fontsize']],
                 ['fontname', ['fontname']],
                 ['color', ['color']],
                 ['para', ['ul', 'ol', 'paragraph']],
                 ['height', ['height']],
                 ['Misc',['fullscreen','codeview']]
               ],

            });

	     });

	</script>

@stop