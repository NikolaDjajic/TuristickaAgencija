<?php
use App\Models\Package;

?>

<style>
    /* Prilagođeni stil za povećanje visine inputa */
    .custom-input-width {
        width: 50px; /* Ovdje možete postaviti željenu visinu u pikselima */
    }

   /* Define a CSS class for the scrollable div */
   .scrollable-div {
       height: 500px; /* Set the desired height for the scrollable div */
       overflow: auto; /* Add a scroll bar if the content overflows the height */
   }

</style>
@extends('users/layout')

@section('content')
<section class="section section-bg" id="call-to-action" style="background-image: url({{asset('images/banner-image-1-1920x500.jpg')}})">
</section>
    <!-- ***** Ljetovanje Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Sve<em> ponude</em></h2>
                        <img src="{{asset('images/line-dec.png')}}" alt="">
                        <br>
                        <div class="main-button mb-3">
                            <a href="#" data-toggle="modal" data-target="#exampleModal">Dodaj ponudu</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="section" id="trainers">
        <div class="container">
            <div class="section-heading1">
                <h2>&emsp;&emsp;Ponude</h2>
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
            </div>

           <!--Pop up -->>
           <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Dodaj ponudu</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="contact-us">
                  <div class="contact-form">
      
                    <form action="{{ url()->current() }}" id="contact" method="POST">
                     @csrf 
                     <div class="row justify-content-center">
                                    <div class="col-md-4 d-flex justify-content-center">
                                         <fieldset>
                                              <label for="naslov">Naslov</label>
                                              <input type="text" id="naslov" name="naslov" class="form-control" placeholder="naslov" required="">
                                         </fieldset>
                                    </div>
                                    <div class="col-md-4 d-flex justify-content-center">
                                        <fieldset>
                                        <label for="godDoba">Godisnje doba</label>
                                        <select name="godDoba" id="godDoba">
                                             <option value="Ljeto">Ljeto</option>
                                             <option value="Jesen">Jesen</option>
                                             <option value="Zima">Zima</option>
                                             <option value="Proljece">Proljece</option>
                                        </select>
                                    </fieldset>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="d-flex justify-content-center">
                                            <fieldset>
                                                <label for="brNocenja">Broj nocenja</label>
                                                <input type="number" id="brNocenja" name="brNocenja" class="form-control" placeholder="Broj nocenja" required>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                      

                        <!-- RED-->
        <div class="row justify-content-center">
    <div class="col-md-4">
        <div class="d-flex justify-content-center">
            <fieldset>
                <label for="hotel">Hotel</label>
                <input type="text" id="hotel" name="hotel" class="form-control" placeholder="hotel" required>
            </fieldset>
        </div>
    </div>

    <div class="col-md-4">
        <div class="d-flex justify-content-center">
            <fieldset>
                <label for="adresa">Adresa hotela</label>
                <input type="text" id="adresa" name="adresa" class="form-control" placeholder="Adresa hotela" required>

            </fieldset>
        </div>
    </div>

    <div class="col-md-4">
        <div class="d-flex justify-content-center">
            <fieldset>
                <label for="prevoz">Prevoz</label>
                <select name="prevoz" id="prevoz">
                     <option value="da">Da</option>
                     <option value="ne">Ne</option>
                </select>
            </fieldset>
        </div>
    </div>
</div> 


<div class="row justify-content-center">

    <div class="col-md-4">
        <div class="d-flex justify-content-center">
            <fieldset>
                <label for="polazak">Polazak</label>
                <input type="date" id="polazak" name="polazak" class="form-control" placeholder="Polazak" required>
            </fieldset>
        </div>
    </div>

    <div class="col-md-4">
        <div class="d-flex justify-content-center">
            <fieldset>
                <label for="vrsta">Vrsta</label>
                <select name="vrsta" id="vrsta">
                    <option value="LJ">Ljetovanje</option>
                    <option value="Z">Zimovanje</option>
                    <option value="I">Izlet</option>
                    <option value="O">Ostalo</option>
               </select>   
             </fieldset>
        </div>
    </div>

    <div class="col-md-4">
        <div class="d-flex justify-content-center">
            <fieldset>
                <label for="slika">Dodaj sliku</label>
                <input class="" type="file" name="slika" id="slika">
            </fieldset>
        </div>
    </div>
</div>

  
                        <br>
                        <div class="row">
                          <div class="col-md-12">
                               <fieldset>
                                    <label for="opis">Opis</label>
                                    <textarea id="opis" name="opis" class="form-control" placeholder="Opis ponude" required></textarea>
                               </fieldset>
                             </div>
                        </div>
                 </div>
                 </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Otkazi</button>
                  <button type="submit" name="submitDugme" class="btn btn-primary">Dodaj</button>
                </div>
           </form>
              </div>
            </div>
          </div>

        </section>
@endsection