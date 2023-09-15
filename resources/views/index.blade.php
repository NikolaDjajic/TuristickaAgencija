<?php
use App\Models\Package;
?>

@extends('layout')

@section('content')
   
    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="{{asset('images/video.mp4')}}" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6><em>Turistička </em> Agencija</h6>
                <h2><em>Istraži</em> Svijet sa nama!</h2>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Ljetovanje Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Naša<em> ponuda</em></h2>
                        <img src="{{asset('images/line-dec.png')}}" alt="">
                        <p>Uživajte u najboljim svjetskim destinacijama po povoljnim cijenama uz vrhunski smještaj.</p>
                    </div>
                </div>
            </div>
            <div class="section-heading1">
                <h2>&emsp;&emsp;Ljetovanja</h2>
                <br>
            </div>
            <div class="row">
                @foreach($packagesLJ = Package::where('vrsta','LJ')->take(3)->get() as $package)
                <x-package-one-card :package="$package" />
                @endforeach
            </div>

            <!-- Dugme -->
                <div class="main-button text-center">
                    <a href="/ljetovanja">Sva ljetovanja</a>
                </div>

            </div>
        </section>
    <!-- ***** ljetovanje Ends ***** -->
    <br>
    <br>
    <!-- ***** Zimovanje Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
           
            <div class="section-heading1">
                <h2>&emsp;&emsp;Zimovanja</h2>
                <br>
            </div>
            <div class="row">
                @foreach($packagesZ = Package::where('vrsta','Z')->take(3)->get() as $package)
                <x-package-one-card :package="$package" />
                @endforeach
            </div>

            <!-- Dugme -->
                <div class="main-button text-center">
                    <a href="/zimovanja">Sva zimovanja</a>
                </div>
            </div>
        </section>
    <!-- ***** zimovanje Ends ***** -->
    <br>
    <br>
    <!-- ***** Jednodnevni izleti Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            
            <div class="section-heading1">
                <h2>&emsp;&emsp;Jednodnevni izleti</h2>
                <br>
            </div>
            <div class="row">
                @foreach($packagesLJ = Package::where('vrsta','I')->take(3)->get() as $package)
                <x-package-one-card :package="$package" />
                @endforeach
            </div>

            <!-- Dugme -->
                <div class="main-button text-center">
                    <a href="/izleti">Svi izleti</a>
                </div>
            </div>
        </section>
    <!-- ***** jednodnevni izleti Ends ***** -->



<!-- ***** O NAMA ***** -->
    <section class="section section-bg" id="schedule" style="background-image: url('{{asset('images/about-fullscreen-1-1920x700.jpg')}}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2>O<em> nama</em></h2>
                        <img src="{{asset('images/line-dec.png')}}" alt="">
                        <p>Dobrodošli u TravelBL - Vaš Partner za Nezaboravna Putovanja</p>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-content text-center">
<p>   TravelBL je strastvena ekipa zaljubljenika u putovanja koja se posvetila tome da vam pruži najbolje iskustvo u planiranju i realizaciji vaših avantura širom sveta. Sa više od 5 godina iskustva u turističkoj industriji, mi smo vaši stručnjaci za sve što se tiče putovanja.</p>
</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Testimonials Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Iskustva naših<em> korisnika </em></h2>
                        <img src="{{asset('images/line-dec.png')}}" alt="waves">
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{asset('images/features-first-icon.png')}}"  alt="First One">
                            </div>
                            <div class="right-content">
                                <h4>Jovan Markovic</h4>
                                <p><em>"Putovanje na Maldivima premašilo je sva naša očekivanja! Od beskrajnih belih plaža i tirkiznog mora do luksuznih bungalova iznad vode, ovo putovanje je bilo čista idila. Hrana je bila izvrsna, osoblje ljubazno, i zalasci sunca su bili spektakularni. Ne možemo dovoljno da istaknemo koliko smo uživali."</em></p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{asset('images/features-first-icon.png')}}" alt="second one">
                            </div>
                            <div class="right-content">
                                <h4>Filip Vukovic</h4>
                                <p><em>"Švajcarske Alpe su pravi raj za ljubitelje prirode i avantura, a naše putovanje tamo bilo je nezaboravno. Skijanje niz strme padine, šetnje kroz prelepe planinske pejzaže i ukusna fondi jela su nas ostavili bez daha. Smestaj u šarmantnim planinskim kućama bio je dodatni bonus. Definitivno se vraćamo!"</em></p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{asset('images/features-first-icon.png')}}" alt="fourth muscle">
                            </div>
                            <div class="right-content">
                                <h4>Darko Dejanovic</h4>
                                <p><em>"Naš romantični vikend u Parizu bio je san ostvarenja. Obilazak Ajfelovog tornja, vožnja brodom Seinom i uživanje u francuskim delicijama su nas potpuno osvojili. Smestaj u luksuznom butik hotelu je bio apsolutno savršen. Osećali smo se kao da smo u filmu. Hvala na nezaboravnom iskustvu!"</em></p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{asset('images/features-first-icon.png')}}" alt="training fifth">
                            </div>
                            <div class="right-content">
                                <h4>Milica Trivic</h4>
                                <p><em>"Istanbul je pravo čudo kulturnog bogatstva i naša tura je bila savršena. Posetili smo čuvene džamije, istraživali fascinantne tržnice i probali autentičnu tursku hranu. Vodič je bio izuzetan i pružio nam je dublje razumevanje istorije i kulture ovog grada. Preporučujemo svima da posete Istanbul!"</em></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <br>
        </div>
    </section>
    <!-- ***** Testimonials Item End ***** -->


    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url({{asset('images/banner-image-1-1920x500.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Kontaktirajte <em>nas</em></h2>
                        <p>Spremni ste da započnete svoje putovanje? Kontaktirajte nas danas kako bismo vam pomogli da stvorite nezaboravne trenutke na vašim budućim avanturama. Naša vrata su vam uvek otvorena.</p>
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