@extends('admin.layouts.backend')

@section('css')
  <link rel="stylesheet" href="{{ url('css/dropzone/basic.css') }}">
	<link rel="stylesheet" href="{{ url('css/dropzone/dropzone.css') }}">
@stop

@section('title')
	Gestisci la home page
@stop

@section('content')
    

    {{-- SEO TITLE E SEO DESCRIPTION --}}
    <form  method="POST" action="{{ route('homepage.modifySEOFileds') }}">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="nome">SEO TITLE</label>
        <input type="text" class="form-control" id="seo_title" placeholder="SEO TITLE" name="seo_title" value="{{old('seo_title', isset($homepage->seo_title) ? $homepage->seo_title : null)}}">
      </div>
      <div class="form-group">
        <label for="nome">SEO DESCRIPTION</label>
        <textarea class="form-control" rows="3" name="seo_description">{{old('seo_description', isset($homepage->seo_description) ? $homepage->seo_description : null)}}</textarea>
      </div>

      <div class="row">
        <button type="submit" class="btn btn-primary">Modifica campi SEO</button>
      </div>
    </form>


    <div class="sldeHeader">    
        <div class="row">
        <h2>Slide header</h2>
        </div>

        @if ($slide_header->immagini->count())
          <form  method="POST" action="{{ route('homepage.modifySlideHeader') }}">
          {{ csrf_field() }}
          <input type="hidden" name="slide_id" value="{{$slide_header->id}}">
          
          @foreach ($slide_header->immagini as $immagine)
          <div class="row">
          
          <div class="col-md-3"> 
            @if ( strpos($immagine->mime, 'video') !== false  )
              <img src=" {{ asset('frontend_new/assets/img/icon/video.png') }}" alt="video">
            @else
              <img src="{{ url('thumbs/'.$immagine->nome) }}" width="200" height="104">
            @endif
          
          </div>
          
          <div class="col-md-8">             
    <textarea class="form-control" rows="3" name="descrizione_{{$immagine->id}}">{{old('descrizione_'.$immagine->descrizione, isset($immagine->descrizione) ? $immagine->descrizione : null)}}</textarea>
          </div>        
            
          <div class="col-md-1">
            <button type="button" class="btn btn-default delete_image_slide" data-id="{{$immagine->id}}">
              <span class="glyphicon glyphicon-remove"></span>
            </button>
          </div>
          
          </div>
          @endforeach

          <div class="row">
            <button type="submit" class="btn btn-primary">Modifica descrizioni</button>
          </div>
          
          </form>
         @else
          <div class="row">
            <p>Nessuna immagine caricata ancora</p>
          </div>
        @endif
    </div>

    <br>
    <div class="row">
      <form  method="POST" action="{{ route('homepage.uploadSlideHeader') }}" class="dropzone"  enctype="multipart/form-data" id="formUploadSlideHeader">
        {{ csrf_field() }}
        <input type="hidden" name="slide_id" value="{{$slide_header->id}}">
      </form>
    

      <div class="dz-preview dz-file-preview"  id="preview-template-silde-header" style="display: none;">
        <div class="dz-details">
          <div class="dz-filename"><span data-dz-name></span></div>
          <div class="dz-size" data-dz-size></div>
          <img data-dz-thumbnail />
        </div>
        <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div>
        {{-- <div class="dz-success-mark"><span>✔</span></div>
        <div class="dz-error-mark"><span>✘</span></div> --}}
        <div class="dz-error-message"><span data-dz-errormessage></span></div>
      </div>

    </div>

    <hr>
    

 <div class="row">
    <h2>Mappa</h2>
  </div>

  <form  method="POST" action="{{ route('homepage.save_map') }}"  enctype="multipart/form-data">
    {{ csrf_field() }}    
    <div class="form-group">
        <label for="gm_nome">Nome</label>
        <input type="text" class="form-control" id="gm_nome" placeholder="Celiachiamo LAB" name="gm_nome" value="{{old('gm_nome', isset($homepage->gm_nome) ? $homepage->gm_nome : null)}}">
        <label for="gm_indirizzo">Descrizione</label>
        <textarea class="form-control" rows="3" name="gm_indirizzo" id="gm_indirizzo">{{old('gm_indirizzo', isset($homepage->gm_indirizzo) ? $homepage->gm_indirizzo : null)}}</textarea>
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
                <input type="text" class="form-control" id="gm_lat" placeholder="41.8505419" name="gm_lat" value="{{old('gm_lat', isset($homepage->gm_lat) ? $homepage->gm_lat : null)}}">
                <label for="gm_long">Longitudine</label>
                <input type="text" class="form-control" id="gm_long" placeholder="12.45956769999998" name="gm_long" value="{{old('gm_long', isset($homepage->gm_long) ? $homepage->gm_long : null)}}">
                <label for="gm_info">Info Window</label>
                <input type="text" class="form-control" id="gm_info" placeholder="Celiachiamo LAB" name="gm_info" value="{{old('gm_info', isset($homepage->gm_info) ? $homepage->gm_info : null)}}">

                <label for="titolo">Immagine Info</label>
                @if (is_null($homepage->gm_info_img) || $homepage->gm_info_img == '')
                  <div class="form-group">
                    <input type="file" class="form-control" id="img" name="gm_info_img">
                  </div>
                @else
                  <img src="{{ url('images/'.$homepage->gm_info_img) }}">
                  <button type="button" class="btn btn-default delete_image_map" data-colname="gm_info_img">
                    <span class="glyphicon glyphicon-remove"></span>
                  </button>
                @endif

                <label for="titolo">Icon marker</label>
                 @if (is_null($homepage->gm_icon) || $homepage->gm_icon == '')
                  <div class="form-group">
                    <input type="file" class="form-control" id="img" name="gm_icon">
                  </div>
                @else
                  <img src="{{ url('images/'.$homepage->gm_icon) }}">
                  <button type="button" class="btn btn-default delete_image_map" data-colname="gm_icon">
                    <span class="glyphicon glyphicon-remove"></span>
                  </button>
                @endif
              
              </div>
              <div class="tab-pane" id="2map">
               
               <h3>Inserisci i dati per "Celiachiamo SHOP"</h3>
               <label for="gm_lat2">Latitudine</label>
               <input type="text" class="form-control" id="gm_lat2" placeholder="41.8505419" name="gm_lat2" value="{{old('gm_lat2', isset($homepage->gm_lat2) ? $homepage->gm_lat2 : null)}}">
               <label for="gm_long2">Longitudine</label>
               <input type="text" class="form-control" id="gm_long2" placeholder="12.45956769999998" name="gm_long2" value="{{old('gm_long2', isset($homepage->gm_long2) ? $homepage->gm_long2 : null)}}">
               <label for="gm_info2">Info Window</label>
               <input type="text" class="form-control" id="gm_info2" placeholder="Celiachiamo LAB" name="gm_info2" value="{{old('gm_info2', isset($homepage->gm_info2) ? $homepage->gm_info2 : null)}}">
              
              <label for="titolo">Immagine Info</label>
              @if (is_null($homepage->gm_info2_img) || $homepage->gm_info2_img == '')
                <div class="form-group">
                  <input type="file" class="form-control" id="img" name="gm_info2_img">
                </div>
              @else
                <img src="{{ url('images/'.$homepage->gm_info2_img) }}">
                <button type="button" class="btn btn-default delete_image_map" data-colname="gm_info2_img">
                  <span class="glyphicon glyphicon-remove"></span>
                </button>
              @endif

              <label for="titolo">Icon marker</label>
               @if (is_null($homepage->gm_icon2) || $homepage->gm_icon2 == '')
                <div class="form-group">
                  <input type="file" class="form-control" id="img" name="gm_icon2">
                </div>
              @else
                <img src="{{ url('images/'.$homepage->gm_icon2) }}">
                <button type="button" class="btn btn-default delete_image_map" data-colname="gm_icon2">
                  <span class="glyphicon glyphicon-remove"></span>
                </button>
              @endif

              </div>
              <div class="tab-pane" id="3map">

                <h3>Inserisci i dati per "Celiachiamo TIBURTINA"</h3>
                <label for="gm_lat3">Latitudine</label>
                <input type="text" class="form-control" id="gm_lat3" placeholder="41.8505419" name="gm_lat3" value="{{old('gm_lat3', isset($homepage->gm_lat3) ? $homepage->gm_lat3 : null)}}">
                <label for="gm_long3">Longitudine</label>
                <input type="text" class="form-control" id="gm_long3" placeholder="12.45956769999998" name="gm_long3" value="{{old('gm_long3', isset($homepage->gm_long3) ? $homepage->gm_long3 : null)}}">
                <label for="gm_info3">Info Window</label>
                <input type="text" class="form-control" id="gm_info3" placeholder="Celiachiamo LAB" name="gm_info3" value="{{old('gm_info3', isset($homepage->gm_info3) ? $homepage->gm_info3 : null)}}">

                <label for="titolo">Immagine Info</label>
                @if (is_null($homepage->gm_info3_img) || $homepage->gm_info3_img == '')
                  <div class="form-group">
                    <input type="file" class="form-control" id="img" name="gm_info3_img">
                  </div>
                @else
                  <img src="{{ url('images/'.$homepage->gm_info3_img) }}">
                  <button type="button" class="btn btn-default delete_image_map" data-colname="gm_info3_img">
                    <span class="glyphicon glyphicon-remove"></span>
                  </button>
                @endif

                <label for="titolo">Icon marker</label>
                 @if (is_null($homepage->gm_icon3) || $homepage->gm_icon3 == '')
                  <div class="form-group">
                    <input type="file" class="form-control" id="img" name="gm_icon3">
                  </div>
                @else
                  <img src="{{ url('images/'.$homepage->gm_icon3) }}">
                  <button type="button" class="btn btn-default delete_image_map" data-colname="gm_icon3">
                    <span class="glyphicon glyphicon-remove"></span>
                  </button>
                @endif
              </div>
            </div>
           
        </div> {{-- end exTab3 --}}
      </div>
      
      <div class="row">
        <button type="submit" class="btn btn-primary">Salva Mappa</button>
      </div>    
    </form>
    {{-- FINE MAPPA --}}
    
    {{--  FOOTER SLIDE --}}
    <div class="sldeFooter">    
        <div class="row">
        <h2>Slide footer</h2>
        </div>

        @if ($slide_footer->immagini->count())
          <form  method="POST" action="{{ route('homepage.modifySlideFooter') }}">
          {{ csrf_field() }}
          <input type="hidden" name="slide_id" value="{{$slide_footer->id}}">
          
          @foreach ($slide_footer->immagini as $immagine)
          <div class="row">
          
          <div class="col-md-3">        
            <img src="{{ url('thumbs/'.$immagine->nome) }}" width="100" height="74">
          </div>
          
          <div class="col-md-8">             
    <textarea class="form-control" rows="3" name="descrizione_{{$immagine->id}}">{{old('descrizione_'.$immagine->descrizione, isset($immagine->descrizione) ? $immagine->descrizione : null)}}</textarea>
          </div>        
            
          <div class="col-md-1">
            <button type="button" class="btn btn-default delete_image_slide" data-id="{{$immagine->id}}">
              <span class="glyphicon glyphicon-remove"></span>
            </button>
          </div>
          
          </div>
          @endforeach

          <div class="row">
            <button type="submit" class="btn btn-primary">Modifica descrizioni</button>
          </div>
          
          </form>
         @else
          <div class="row">
            <p>Nessuna immagine caricata ancora</p>
          </div>
        @endif
    </div>
    <br>
    <div class="row">
      <form  method="POST" action="{{ route('homepage.uploadSlideFooter') }}" class="dropzone"  enctype="multipart/form-data" id="formUploadSlideFooter">
        {{ csrf_field() }}
        <input type="hidden" name="slide_id" value="{{$slide_footer->id}}">
      </form>
    

      <div class="dz-preview dz-file-preview"  id="preview-template-silde-footer" style="display: none;">
        <div class="dz-details">
          <div class="dz-filename"><span data-dz-name></span></div>
          <div class="dz-size" data-dz-size></div>
          <img data-dz-thumbnail />
        </div>
        <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div>
        {{-- <div class="dz-success-mark"><span>✔</span></div>
        <div class="dz-error-mark"><span>✘</span></div> --}}
        <div class="dz-error-message"><span data-dz-errormessage></span></div>
      </div>

    </div>

    <hr>
    {{--  FINE FOOTER SLIDE --}}
@stop

  
    @section('script_head')
      <script src="{{ url('js/dropzone.js') }}"></script>
    @stop

    @section('script')


      


      <script type="text/javascript">



            $( document ).ready(function() {

                // eliminazione immagini header
                $("button.delete_image_slide").click(function(e){
                  if (confirm('Sei sicuro di voler eliminare l\'immagine?')) {
                    var id = jQuery(this).data('id');
                    var data = {
                                "_token": "{{ csrf_token() }}",
                                id:id,
                                };
                    $.ajax({ url: "{{route('homepage.deleteSliderImage')}}",
                             data: data,
                             type: 'post',
                             success: function(output) 
                              {
                              window.location.reload(true);
                              }
                    });
                  };
                });


          


                // eliminazione immagini mappe

                    $("button.delete_image_map").click(function(e){
                      if (confirm('Sei sicuro di voler eliminare l\'immagine?')) {
                        var colname = jQuery(this).data('colname');
                        var data = {
                                    "_token": "{{ csrf_token() }}",
                                    colname:colname,
                                    };
                        $.ajax({ url: "{{route('homepage.deleteMapImage')}}",
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




            Dropzone.options.formUploadSlideHeader = {
              paramName: "file", // The name that will be used to transfer the file
              maxFilesize: 20, // MB
              acceptedFiles: ".jpeg,.jpg,.png,.gif,.mp4",
              dictDefaultMessage: "Clicca o trascina qui i file da caricare nella header slide",
              //previewTemplate: document.getElementById('preview-template-silde-header').innerHTML,
              
              accept: function(file, done) {
                if (file.name == "xxx.jpg") {
                  done("Naha, you don't.");
                }
                else { done(); }
              },
              
              init: function () {
                var error = 0;
                this.on('error', function(file, response) {
                    $('#preview-template-silde-header').find('.dz-error-message').html(response);
                    $('#preview-template-silde-header').fadeIn();
                    error = 1;
                });

                this.on("complete", function (file) {
                  if (this.getUploadingFiles().length === 0 && this.getQueuedFiles().length === 0) {
                    if(!error)
                      setTimeout(function(){ location.reload(); }, 1000);
                  }
                });

              
              }

              };



            Dropzone.options.formUploadSlideFooter = {
              paramName: "file", // The name that will be used to transfer the file
              maxFilesize: 2, // MB
              acceptedFiles: ".jpeg,.jpg,.png,.gif",
              dictDefaultMessage: "Clicca o trascina qui i file da caricare nella footer slide",
              //previewTemplate: document.getElementById('preview-template-silde-header').innerHTML,
              
              accept: function(file, done) {
                if (file.name == "xxx.jpg") {
                  done("Naha, you don't.");
                }
                else { done(); }
              },
              
              init: function () {
                var error = 0;
                this.on('error', function(file, response) {
                    $('#preview-template-silde-footer').find('.dz-error-message').html(response);
                    $('#preview-template-silde-footer').fadeIn();
                    error = 1;
                });

                this.on("complete", function (file) {
                  if (this.getUploadingFiles().length === 0 && this.getQueuedFiles().length === 0) {
                    if(!error)
                      setTimeout(function(){ location.reload(); }, 1000);
                  }
                });

              
              }

              };
    </script>

    @stop
