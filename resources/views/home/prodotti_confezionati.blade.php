<div id="confezionati" class="content-section-b content-section-confezionati">
    <div class="container">
        <div class="row row_prodotti_confezionati">

            <div class="col-lg-6 col-md-12 col-sm-12 wow fadeInLeftBig text-center" data-animation-delay="200">
                <h3 class="section-heading">
                    Prodotti confezionati
                </h3>
                <div class="sub-title lead3">
                   TUTTO IL MEGLIO
                </div>
                <p class="lead">
                    In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. 
            Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, 
            uam non erat mirum sapientiae lorem cupido
            patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.
                </p>
                <p>
                    <a class="btn btn-embossed btn-primary" href="#" role="button">
                        APPROFONDISCI
                    </a>
                </p>
                <h4>Video di accoglienza</h4>
                  <div class="first_video_confezionati">
                    <a class="popup-youtube" href="https://www.youtube.com/embed/hrqf_OwWqXs">
                      <img src="{{ url('frontend_new/assets/img/th_acc_1.jpg') }}" alt="Prodotti confezionati">
                    </a>
                  </div>
                  <div class="second_video">
                    <a class="popup-youtube" href="https://www.youtube.com/embed/hrqf_OwWqXs">
                      <img class="img-left" src="{{ url('frontend_new/assets/img/th_acc_2.jpg') }}" alt="Prodotti confezionati">
                    </a>
                  </div>
                  <div style="clear: both;"></div>
                  @include('home.social_buttons')
            </div>

             <div class="col-lg-6 col-md-12 col-sm-12 wow fadeInRightBig">
                <div class="owl-carousel" id="owlc">
                    @foreach ($slide_confezionati->immagini as $count => $immagine)
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


        </div>{{-- / row --}}
    </div> {{-- container --}}
</div> {{-- content-section-b --}}