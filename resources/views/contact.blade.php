@extends('layout')

@section('content')

    <section class="section section-bg" id="call-to-action" style="background-image: url({{asset('images/banner-image-1-1920x500.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Kontaktirajte<em> nas</em></h2>
                        <p>Spremni ste da započnete svoje putovanje? Kontaktirajte nas danas kako bismo vam pomogli da stvorite nezaboravne trenutke na vašim budućim avanturama. Naša vrata su vam uvek otvorena.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Features Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Kontakt <em> info</em></h2>
                        <img src="{{asset('images/line-dec.png')}}" alt="waves">
                        
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="icon">
                        <i class="fa fa-phone"></i>
                    </div>

                    <h5><a href="#">+1 333 4040 5566</a></h5>

                    <br>
                </div>

                <div class="col-md-4">
                    <div class="icon">
                        <i class="fa fa-envelope"></i>
                    </div>

                    <h5><a href="#">travelBL@gmail.com</a></h5>

                    <br>
                </div>

                <div class="col-md-4">
                    <div class="icon">
                        <i class="fa fa-map-marker"></i>
                    </div>

                    <h5>Kralja Petra I Karađorđevića, Banja Luka</h5>

                    <br>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Item End ***** -->
   
    <!-- ***** Contact Us Area Starts ***** -->
    <section class="section" id="contact-us" style="margin-top: 0">
      <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12 mx-auto">
              <div id="map">
                <iframe src="https://maps.google.com/maps?q=Краља+Петра+I+Карађорђевића,+Бања+Лука+78000/@44.7716704,17.1900236,19z/data=!4m16!1m9!4m8!1m0!1m6!1m2!1s0x475e031b063a2517:0x46746f44d807a7a1!2z0JrRgNCw0ZnQsCDQn9C10YLRgNCwIEkg0JrQsNGA0LDRktC-0YDRktC10LLQuNGb0LAsINCR0LDRmtCwINCb0YPQutCwIDc4MDAw!2m2!1d17.1904534!2d44.771638!3m5!1s0x475e031b063a2517:0x46746f44d807a7a1!8m2!3d44.771638!4d17.1904534!16s%2Fg%2F11cn2mbzfx?entry=ttu&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
              </div>
          </div>
      </div>
  </section>
  
    <!-- ***** Contact Us Area Ends ***** -->

@endsection