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
                <h6><em>Turisticka </em> Agencija</h6>
                <h2><em>Istrazi</em> Svijet sa nama!</h2>
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
                        <p>Uzivajte u najboljim svjetskim destinacijama po povoljnim cijenama uz vrhunski smjestaj.</p>
                    </div>
                </div>
            </div>
            <div class="section-heading1">
                <h2>&emsp;&emsp;Ljetovanja</h2>
                <br>
            </div>
            <div class="row">
                @foreach($packagesLJ = Package::where('vrsta','LJ')->get() as $package)
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
                @foreach($packagesZ = Package::where('vrsta','Z')->get() as $package)
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
                @foreach($packagesLJ = Package::where('vrsta','I')->get() as $package)
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
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-content text-center">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore deleniti voluptas enim! Provident consectetur id earum ducimus facilis, aspernatur hic, alias, harum rerum velit voluptas, voluptate enim! Eos, sunt, quidem.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto nulla quo cum officia laboriosam. Amet tempore, aliquid quia eius commodi, doloremque omnis delectus laudantium dolor reiciendis non nulla! Doloremque maxime quo eum in culpa mollitia similique eius doloribus voluptatem facilis! Voluptatibus, eligendi, illum. Distinctio, non!</p>
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem incidunt alias minima tenetur nemo necessitatibus?</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{asset('images/features-first-icon.png')}}"  alt="First One">
                            </div>
                            <div class="right-content">
                                <h4>John Doe</h4>
                                <p><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta numquam maxime voluptatibus, impedit sed! Necessitatibus repellendus sed deleniti id et!"</em></p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{asset('images/features-first-icon.png')}}" alt="second one">
                            </div>
                            <div class="right-content">
                                <h4>John Doe</h4>
                                <p><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta numquam maxime voluptatibus, impedit sed! Necessitatibus repellendus sed deleniti id et!"</em></p>
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
                                <h4>John Doe</h4>
                                <p><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta numquam maxime voluptatibus, impedit sed! Necessitatibus repellendus sed deleniti id et!"</em></p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{asset('images/features-first-icon.png')}}" alt="training fifth">
                            </div>
                            <div class="right-content">
                                <h4>John Doe</h4>
                                <p><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta numquam maxime voluptatibus, impedit sed! Necessitatibus repellendus sed deleniti id et!"</em></p>
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