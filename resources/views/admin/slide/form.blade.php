@extends('admin.layouts.backend')

@section('css')
  <link rel="stylesheet" href="{{ url('css/dropzone/basic.css') }}">
	<link rel="stylesheet" href="{{ url('css/dropzone/dropzone.css') }}">
@stop

@section('title')
  {{ $slide->exists ? 'Modifica slide' : 'Nuova slide'}}
@stop

@section('content')

      @if ($slide->exists)
        <form  method="POST" action="{{ route('slide.update', $slide->id) }}">
        {{ method_field('PUT') }}
      @else
        <form  method="POST" action="{{ route('slide.store') }}">
      @endif
        
        {{ csrf_field() }}
        

        <div class="form-group">
          <label for="nome">Titolo</label>
          <input type="text" class="form-control" id="nome" placeholder="slide prodotti confezionati Magliana" name="titolo" value="{{old('titolo', isset($slide->titolo) ? $slide->titolo : null)}}">
        </div>
        
        <button type="submit" class="btn btn-primary">{{ $slide->exists ? 'Modifica' : 'Salva'}}</button>

      </form>   
      
    @if ($slide->exists)

    <div class="slde">    
    
        @if ($slide->immagini->count())
          <form  method="POST" action="{{ route('slide.modifySlide') }}">
          {{ csrf_field() }}
          <input type="hidden" name="slide_id" value="{{$slide->id}}">
          
          @foreach ($slide->immagini as $immagine)
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
      <form  method="POST" action="{{ route('slide.uploadSlide') }}" class="dropzone"  enctype="multipart/form-data" id="formUploadSlide">
        {{ csrf_field() }}
        <input type="hidden" name="slide_id" value="{{$slide->id}}">
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

    @endif {{-- fine se esiste la slide --}}
@stop

    @if ($slide->exists)
    
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
                    $.ajax({ url: "{{route('slide.deleteSliderImage')}}",
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




            Dropzone.options.formUploadSlide = {
              paramName: "file", // The name that will be used to transfer the file
              maxFilesize: 2, // MB
              acceptedFiles: ".jpeg,.jpg,.png,.gif",
              dictDefaultMessage: "Clicca o trascina qui i file da caricare nella slide",
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
    </script>
  
    @stop
  
    @endif  {{-- fine se esiste la slide --}}
