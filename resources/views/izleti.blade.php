<?php
use App\Models\Package;

?>
@extends('layout')

@section('content')

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url({{asset('images/91851-tours-landmark-architecture-medieval_architecture-tree-1920x1080.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2> Iz<em>leti</em></h2>
                        <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Naslov End ***** -->

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
                <h2>&emsp;&emsp;Izleti</h2>
                <br>
            </div>
            <div class="row">
                @foreach($packages as $key => $package)
        <x-package-one-card :package="$package" />

            @if(($key + 1) % 3 === 0)
                </div><div class="row">
                @endif
            @endforeach
            </div>

            <!-- Dugme -->
               

            </div>
        </section>
    <!-- ***** ljeto-->

                <!-- Dugmad dole -->
           
        </div>
    </section>
    <!-- ***** Fleet Ends ***** -->

@endsection