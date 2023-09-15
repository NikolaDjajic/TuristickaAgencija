@extends('layout')

@section('content')

    <section class="section section-bg" id="call-to-action" style="background-image: url({{asset('images/banner-image-1-1920x500.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>O <em>Nama</em></h2>
                        <p>Dobrodošli u TravelBL - Vaš Partner za Nezaboravna Putovanja</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Our Classes Start ***** -->
    <section class="section" id="our-classes">
        <div class="container">
            <br>
            <br>
            <br>
            <div class="row" id="tabs">
              <div class="col-lg-4">
                <ul>
                  <li><a href='#tabs-1'><i class="fa fa-soccer-ball-o"></i>Naši Ciljevi</a></li>
                  <li><a href='#tabs-2'><i class="fa fa-briefcase"></i>Naš Rad</a></a></li>
                  <li><a href='#tabs-3'><i class="fa fa-heart"></i>Naša Strast</a></a></li>
                </ul>
              </div>
              <div class="col-lg-8">
                <section class='tabs-content'>
                  <article id='tabs-1'>
                    <h4>Naši Ciljevi</h4>
                   <p>Naša temeljna svrha je da vam omogućimo da ostvarite svoje snove o putovanjima. Postavljanje visokih ciljeva i težnja ka njihovom ostvarivanju duboko su ukorenjeni u našem poslovanju. Evo nekoliko ključnih ciljeva koji nas motivišu:
                    <br>
                    <br>

                    Klijent-Zadovoljstvo: Naš prvenstveni cilj je da svaki klijent bude apsolutno zadovoljan svojim putovanjem. To postižemo pružanjem najboljih usluga, prilagođenih putovanja i besprekornih iskustava.
                    <br>                    <br>

                    Destinacije bez Granica: Nastojimo da vam otvorimo vrata ka svetu. Naš cilj je da vam omogućimo da istražujete različite kulture, predele i avanture širom sveta.
                    <br>
                    <br>

                    Očuvanje Prirode i Kulture: Svesni smo odgovornosti prema destinacijama koje posetimo i trudimo se da promovišemo održivi turizam. Naš cilj je da se gosti osećaju dobrodošlima, a istovremeno da čuvamo prirodno i kulturno bogatstvo destinacija koje posetimo.</p>
                    <img src="{{asset('images/about-image-1-940x460.jpg')}}" alt="">
                  </article>
                  <article id='tabs-2'>
                    <h4>Naš Rad</h4>
                    <p>Naša strast prema putovanjima ne bi bila ostvariva bez naše predanosti i radne etike. Ovde je kako radimo:
                      <br>
                      <br>
                      Stručni Tim: Naš tim stručnjaka je obučen i iskusan u turističkoj industriji. Posvećeni smo stalnom učenju i praćenju najnovijih trendova kako bismo vam pružili najbolje savete.
                      <br>
                    <br>
                      Prilagođena Ponuda: Svako putovanje koje organizujemo je pažljivo prilagođeno potrebama i željama naših klijenata. Nema dve iste avanture jer se trudimo da svako iskustvo bude jedinstveno.
                      <br>
                    <br>
                      Transparentnost i Pouzdanost: Gradimo odnose sa našim klijentima na osnovu poverenja. Naša transparentnost u cenama, uslugama i komunikaciji ključna je za uspešno partnerstvo.</p>
                    <img src="{{asset('images/about-image-2-940x460.jpg')}}" alt="">
                  </article>
                  <article id='tabs-3'>
                    <h4>Naša Strast</h4>
                    <p>Strast prema putovanjima je srce našeg poslovanja. To je ono što nas pokreće i inspiriše svaki dan:
                      <br>
                      <br>
                      Istraživanje Novih Horizonta: Zaljubljeni smo u istraživanje nepoznatih destinacija i stvaranje nezaboravnih uspomena. Naša strast prema putovanjima nadahnjuje nas da stvaramo jedinstvene avanture za vas.
                      <br>
                    <br>
                      Deljenje Radosti Putovanja: Ništa nas ne čini srećnijim od saznanja da smo vam pomogli da doživite nešto novo i posebno. To je ono što nas svakodnevno motiviše.
                      <br>
                    <br>
                      Povezivanje sa Kulturom i Prirodom: Putovanje je prilika da se dublje povežemo sa različitim kulturama i prirodnim čudima sveta. Naša strast je učiti i deliti ova iskustva sa vama.
                      <br>
                    <br>
                      Naša agencija je više od posla, to je izražavanje naše strasti prema putovanjima i želje da tu strast podelimo sa vama. Hvala što ste deo naše priče o putovanjima!</p>
                    <img src="{{asset('images/about-image-3-940x460.jpg')}}" alt="">
                  </article>
                </section>
              </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Classes End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url({{asset('images/banner-image-1-1920x500.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Posaljite nam <em>poruku</em></h2>
                        <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula, sit amet dapibus odio augue eget libero. Morbi tempus mauris a nisi luctus imperdiet.</p>
                        <div class="main-button">
                            <a href="kontakt">Kontaktirajte nas</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

@endsection