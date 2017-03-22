@extends('admin.layouts.backend')

@section('css')
	<link rel="stylesheet" href="/css/dropzone/dropzone.css">
@stop

@section('title')
	Carica le foto
@stop

@section('content')
    @if ($galleria->immagini->count())
      <div class="row">
      <div class=container_galleria>  
      <ul class="galleria">
      @foreach ($galleria->immagini as $immagine)
          <li><img src="{{ url('images/'.$immagine->nome) }}" width="150" height="100"></li>    
      @endforeach
      </ul>
      </div>
      </div>
    @endif
    <hr>
    <div class="row">
    <form  method="POST" action="{{ route('homepage.uploaduploadSlideHeader') }}" class="dropzone"  enctype="multipart/form-data" id="formUpload">
      {{ csrf_field() }}
      <input type="hidden" name="galleria_id" value="{{$galleria->id}}">
    </form>
    {{--  @include('admin.gallerie.dropzone') --}}



  <div id="preview-template" style="display: block;"></div>

  </div>
  
  <a class="btn btn-primary" href="{{ route('gallerie.index') }}">Torna all'elenco</a>



@stop


    @section('script_head')
      <script src="/js/dropzone.js"></script>
    @stop

    @section('script')
      <script type="text/javascript">

            Dropzone.options.formUpload = {
              paramName: "file", // The name that will be used to transfer the file
              maxFilesize: 2, // MB
              acceptedFiles: ".jpeg,.jpg,.png,.gif",
              //previewTemplate: document.getElementById('preview-template').innerHTML,
              accept: function(file, done) {
                if (file.name == "xxx.jpg") {
                  done("Naha, you don't.");
                }
                else { done(); }
              }
            };
    </script>
    
    {{-- Alternatively you can create dropzones programmaticaly (even on non form elements) by instantiating the Dropzone class --}}
    {{-- <script type="text/javascript">
      var baseUrl = "{{ route('gallerie.upload') }}";
      var token = "{{ Session::getToken() }}";
      var galleria_id = "{{$galleria->id}}";
      
      Dropzone.autoDiscover = false;
      
      var myDropzone = new Dropzone("div#dropzoneFileUpload", {
           url: baseUrl,
           previewTemplate: '<div class="dz-preview dz-file-preview"><div class="dz-details"><div class="dz-filename"><span data-dz-name></span></div><div class="dz-size" data-dz-size></div><img data-dz-thumbnail /></div><div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div><div class="dz-success-mark"><span>✔</span></div><div class="dz-error-mark"><span>✘</span></div><div class="dz-error-message"><span data-dz-errormessage></span></div></div>',
           params: {
              _token: token,
              galleria_id: galleria_id,
            }
       });

      myDropzone.on("success", function(file, response) {
        jQuery("tbody#responses").append('<tr style="background-color:green; color:#fff;"><td>'+file.name+'</td><td>'+file.size+'</td><td>'+response+'</td></tr>');
       });
      
      myDropzone.on("error", function(file, error) {
        jQuery("tbody#responses").append('<tr style="background-color:red; color:#fff;"><td>'+file.name+'</td><td>'+file.size+'</td><td>'+error+'</td></tr>');
       });

    </script> --}}  

    @stop
