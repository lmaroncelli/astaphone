@extends('admin.layouts.backend')

@section('css')
  <link href="{{ url('/css/supernote.css') }}" rel="stylesheet">
@stop

@section('title')
	Gestisci la pagina {{$page->title}}
@stop

@section('content')
    
    <form  method="POST" action="{{ route('custompage.save', $page->id) }}">

    {{ csrf_field() }}


    <div class="form-group">
      <label for="nome">URI</label>
      <input type="text" class="form-control" id="uri" placeholder="URI" name="uri" value="{{old('uri', isset($page->uri) ? $page->uri : null)}}">
    </div>

    <div class="form-group">
      <label for="nome">SEO TITLE</label>
      <input type="text" class="form-control" id="seo_title" placeholder="SEO TITLE" name="seo_title" value="{{old('seo_title', isset($page->seo_title) ? $page->seo_title : null)}}">
    </div>
    <div class="form-group">
      <label for="nome">SEO DESCRIPTION</label>
      <textarea class="form-control" rows="3" name="seo_description">{{old('seo_description', isset($page->seo_description) ? $page->seo_description : null)}}</textarea>
    </div>

    <div class="form-group">
      <label for="">Header Slide</label>
      <select class="form-control" name="header_slide_id">
        @foreach ($slideHeader as $key => $titolo)
          <option value="{{$key}}" @if( old('header_slide_id') == $key || (isset($page->header_slide_id) && $page->header_slide_id == $key)) selected @endif>{{$titolo}}</option>
        @endforeach
      </select>
    </div>

      <div class="form-group">
          <label for="nome">Content</label>

          <textarea class="form-control" rows="3" name="content" id="content">{{old('content', isset($page->content) ? $page->content : null)}}</textarea>
      </div>
    
    <hr>
    

 <div class="row">
    <h2>Mappa</h2>
  </div>

  <form  method="POST" action="{{ route('custompage.save_map') }}"  enctype="multipart/form-data">
    {{ csrf_field() }}    
    <div class="form-group">
        <label for="gm_nome">Nome</label>
        <input type="text" class="form-control" id="gm_nome" placeholder="Celiachiamo LAB" name="gm_nome" value="{{old('gm_nome', isset($page->gm_nome) ? $page->gm_nome : null)}}">
        <label for="gm_indirizzo">Descrizione</label>
        <textarea class="form-control" rows="3" name="gm_indirizzo" id="gm_indirizzo">{{old('gm_indirizzo', isset($page->gm_indirizzo) ? $page->gm_indirizzo : null)}}</textarea>
          <br/>
          <div id="exTab3"> 

            <ul class="nav nav-tabs">
              <li class="active">
                <a  href="#1map" data-toggle="tab">CELIACHIAMO LAB</a>
              </li>
              <li><a href="#2map" data-toggle="tab">CELIACHIAMO SHOP</a>
              </li>
              <li><a href="#3map" data-toggle="tab">CELIACHIAMO TIBURTINA</a>
              </li>
            </ul>
            
            <div class="tab-content ">
              <div class="tab-pane active" id="1map">
                <h3>Inserisci i dati per "Celiachiamo LAB"</h3>
                <label for="gm_lat">Latitudine</label>
                <input type="text" class="form-control" id="gm_lat" placeholder="41.8505419" name="gm_lat" value="{{old('gm_lat', isset($page->gm_lat) ? $page->gm_lat : null)}}">
                <label for="gm_long">Longitudine</label>
                <input type="text" class="form-control" id="gm_long" placeholder="12.45956769999998" name="gm_long" value="{{old('gm_long', isset($page->gm_long) ? $page->gm_long : null)}}">
                <label for="gm_info">Info Window</label>
                <input type="text" class="form-control" id="gm_info" placeholder="Celiachiamo LAB" name="gm_info" value="{{old('gm_info', isset($page->gm_info) ? $page->gm_info : null)}}">

                <label for="titolo">Immagine Info</label>
                @if (is_null($page->gm_info_img) || $page->gm_info_img == '')
                  <div class="form-group">
                    <input type="file" class="form-control" id="img" name="gm_info_img">
                  </div>
                @else
                  <img src="{{ url('images/'.$page->gm_info_img) }}">
                  <button type="button" class="btn btn-default delete_image_map" data-colname="gm_info_img">
                    <span class="glyphicon glyphicon-remove"></span>
                  </button>
                @endif

                <label for="titolo">Icon marker</label>
                 @if (is_null($page->gm_icon) || $page->gm_icon == '')
                  <div class="form-group">
                    <input type="file" class="form-control" id="img" name="gm_icon">
                  </div>
                @else
                  <img src="{{ url('images/'.$page->gm_icon) }}">
                  <button type="button" class="btn btn-default delete_image_map" data-colname="gm_icon">
                    <span class="glyphicon glyphicon-remove"></span>
                  </button>
                @endif
              
              </div>
              <div class="tab-pane" id="2map">
               
               <h3>Inserisci i dati per "Celiachiamo SHOP"</h3>
               <label for="gm_lat2">Latitudine</label>
               <input type="text" class="form-control" id="gm_lat2" placeholder="41.8505419" name="gm_lat2" value="{{old('gm_lat2', isset($page->gm_lat2) ? $page->gm_lat2 : null)}}">
               <label for="gm_long2">Longitudine</label>
               <input type="text" class="form-control" id="gm_long2" placeholder="12.45956769999998" name="gm_long2" value="{{old('gm_long2', isset($page->gm_long2) ? $page->gm_long2 : null)}}">
               <label for="gm_info2">Info Window</label>
               <input type="text" class="form-control" id="gm_info2" placeholder="Celiachiamo LAB" name="gm_info2" value="{{old('gm_info2', isset($page->gm_info2) ? $page->gm_info2 : null)}}">
              
              <label for="titolo">Immagine Info</label>
              @if (is_null($page->gm_info2_img) || $page->gm_info2_img == '')
                <div class="form-group">
                  <input type="file" class="form-control" id="img" name="gm_info2_img">
                </div>
              @else
                <img src="{{ url('images/'.$page->gm_info2_img) }}">
                <button type="button" class="btn btn-default delete_image_map" data-colname="gm_info2_img">
                  <span class="glyphicon glyphicon-remove"></span>
                </button>
              @endif

              <label for="titolo">Icon marker</label>
               @if (is_null($page->gm_icon2) || $page->gm_icon2 == '')
                <div class="form-group">
                  <input type="file" class="form-control" id="img" name="gm_icon2">
                </div>
              @else
                <img src="{{ url('images/'.$page->gm_icon2) }}">
                <button type="button" class="btn btn-default delete_image_map" data-colname="gm_icon2">
                  <span class="glyphicon glyphicon-remove"></span>
                </button>
              @endif

              </div>
              <div class="tab-pane" id="3map">

                <h3>Inserisci i dati per "Celiachiamo TIBURTINA"</h3>
                <label for="gm_lat3">Latitudine</label>
                <input type="text" class="form-control" id="gm_lat3" placeholder="41.8505419" name="gm_lat3" value="{{old('gm_lat3', isset($page->gm_lat3) ? $page->gm_lat3 : null)}}">
                <label for="gm_long3">Longitudine</label>
                <input type="text" class="form-control" id="gm_long3" placeholder="12.45956769999998" name="gm_long3" value="{{old('gm_long3', isset($page->gm_long3) ? $page->gm_long3 : null)}}">
                <label for="gm_info3">Info Window</label>
                <input type="text" class="form-control" id="gm_info3" placeholder="Celiachiamo LAB" name="gm_info3" value="{{old('gm_info3', isset($page->gm_info3) ? $page->gm_info3 : null)}}">

                <label for="titolo">Immagine Info</label>
                @if (is_null($page->gm_info3_img) || $page->gm_info3_img == '')
                  <div class="form-group">
                    <input type="file" class="form-control" id="img" name="gm_info3_img">
                  </div>
                @else
                  <img src="{{ url('images/'.$page->gm_info3_img) }}">
                  <button type="button" class="btn btn-default delete_image_map" data-colname="gm_info3_img">
                    <span class="glyphicon glyphicon-remove"></span>
                  </button>
                @endif

                <label for="titolo">Icon marker</label>
                 @if (is_null($page->gm_icon3) || $page->gm_icon3 == '')
                  <div class="form-group">
                    <input type="file" class="form-control" id="img" name="gm_icon3">
                  </div>
                @else
                  <img src="{{ url('images/'.$page->gm_icon3) }}">
                  <button type="button" class="btn btn-default delete_image_map" data-colname="gm_icon3">
                    <span class="glyphicon glyphicon-remove"></span>
                  </button>
                @endif
              </div>
            </div>
           
        </div> {{-- end exTab3 --}}
      </div>

      <div class="form-group">
          <label for="caratteristiche">Listing prodotti</label>
          <div class="checkbox">
            <label>
              <input type="checkbox" id="listing" name="listing" value="1" aria-label="Offerta" @if (old('listing')==1 || (isset($prodotto->listing) && $prodotto->listing == 1) ) checked @endif> 
                attiva
             </label>
          </div>
        </div>

        <div class="form-group">
          <label for="caratteristiche">Prodotti con caratteristiche:</label>
          <div class="checkbox">
              @foreach ($caratteristiche as $key => $nome)
              <label>
                <input type="checkbox" id="{{$nome}}" name="caratteristiche[]" value="{{$key}}" aria-label="{{$nome}}" @if ( old($nome)==1 || in_array($key, $caratteristiche_associate) ) checked @endif>
                {{$nome}}
              </label>
              @endforeach
          </div>
        </div>

        <div class="form-group">
          <label for="categorie">Prodotti nella categoria:</label>
          <div class="checkbox">
              @foreach ($categorie as $key => $nome)
              <label>
                <input type="checkbox" id="{{$nome}}" name="categorie[]" value="{{$key}}" aria-label="{{$nome}}" @if ( old($nome)==1 || in_array($key, $categorie_associate) ) checked @endif> 
                {{$nome}}
              </label>
              @endforeach
          </div>
        </div>

          <hr />
        
        <button type="submit" class="btn btn-primary">Modifica</button>
    
    </form>

@stop


    @section('script')


      


      <script type="text/javascript">



            $( document ).ready(function() {

                $("#content").summernote({
                    height:500,
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

                // eliminazione immagini mappe

                    $("button.delete_image_map").click(function(e){
                      if (confirm('Sei sicuro di voler eliminare l\'immagine?')) {
                        var colname = jQuery(this).data('colname');
                        var data = {
                                    "_token": "{{ csrf_token() }}",
                                    colname:colname,
                                    };
                        $.ajax({ url: "{{route('custompage.deleteMapImage')}}",
                                 data: data,
                                 type: 'post',
                                 success: function(output) 
                                  {
                                  window.location.reload(true);
                                  }
                        });
                      };
                    });


            });

    </script>

    @stop
