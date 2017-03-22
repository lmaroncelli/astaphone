<div id="freschi" class="content-section-b content-section-freschi">
    <div class="container">
        <div class="row row_prodotti_freschi">


            <div class="col-lg-6 col-md-12 col-sm-12 wow fadeInLeftBig" style="padding-top: 20px;">
                <div class="owl-carousel" id="owlf">
                    @foreach ($slide_freschi->immagini as $count => $immagine)
                        <div class="item">
                            @if ($slide_freschi->immagini->count())
                                <div class="hover top"><< Sfoglia >></div>
                            @endif                            
                            <img class="img-responsive" src="{{ url('images/'.$immagine->nome) }}"/>
                            @if ($slide_freschi->immagini->count())
                                <div class="hover bottom">{{$slide_freschi->immagini->count()}} foto</div>
                            @endif
                        </div>
                     @endforeach
                </div>
            </div>
            
            <div class="col-lg-6 col-md-12 col-sm-12 wow fadeInRightBig text-center" data-animation-delay="200">
                <h3 class="section-heading">
                    Prodotti Freschi
                </h3>
                <div class="sub-title lead3">
                    DI NOSTRA PRODUZIONE
                </div>
                <p class="lead">
                    In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. 
            Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, 
            uam non erat mirum sapientiae lorem cupido
                <p>
                    <a class="btn btn-embossed btn-primary transparent" href="#" role="button">
                        APPROFONDISCI
                    </a>
                </p>
                <h4>Video di preparazione</h4>
               
                <div class="first_video_freschi">
                  <a class="popup-youtube" href="https://www.youtube.com/embed/hrqf_OwWqXs">
                    <img class="img-responsive img-right" src="{{ url('frontend_new/assets/img/p_freschi_video1.png') }}" alt="Prodotti freschi">
                  </a>
                </div>
                <div class="second_video">
                <a class="popup-youtube" href="https://www.youtube.com/embed/hrqf_OwWqXs">
                  <img class="img-responsive" src="{{ url('frontend_new/assets/img/p_freschi_video2.png') }}" alt="Prodotti freschi">
                </a>
                </div>
                <div style="clear: both;"></div>
                @include('home.social_buttons')
               
            </div>


        </div>{{-- / row --}}
    </div> {{-- container --}}
</div> {{-- content-section-b --}}