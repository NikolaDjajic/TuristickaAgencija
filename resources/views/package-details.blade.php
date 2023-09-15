@extends('layout')
<style>
     /* Prilagođeni stil za povećanje visine inputa */
     .custom-input-height {
         height: 300px; /* Ovdje možete postaviti željenu visinu u pikselima */
     }

    /* Define a CSS class for the scrollable div */
    .scrollable-div {
        height: 500px; /* Set the desired height for the scrollable div */
        overflow: auto; /* Add a scroll bar if the content overflows the height */
    }

 </style>
@section('content')

     @if($package->vrsta ==="LJ")
          <section class="section section-bg" id="call-to-action" style="background-image: url('{{ asset('images/more-1920x1200-for-hd.jpg')}}')">
     @endif
     @if($package->vrsta ==="Z")
          <section class="section section-bg" id="call-to-action" style="background-image: url('{{ asset('images/view-snowy-mountain-fir-trees-with-blue-sky-background.jpg')}}')">
     @endif
     @if($package->vrsta ==="I")
          <section class="section section-bg" id="call-to-action" style="background-image: url('{{ asset('images/91851-tours-landmark-architecture-medieval_architecture-tree-1920x1080.jpg')}}')">
     @endif
     @if($package->vrsta ==="O")
          <section class="section section-bg" id="call-to-action" style="background-image: url('{{ asset('images/travel.jpg')}}')">
     @endif
  
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2><em> {{$package->naslov}}  </em></h2>
                        <p style="font-size: 22px;">{{$package->cijena}} $</p>
                        <p>Od {{$package->polazak}}</p>     
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Fleet Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <br>
            <br>

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="{{asset('images/package-image-1-1200x600.jpg')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('images/package-image-1-1200x600.jpg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('images/package-image-1-1200x600.jpg')}}" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            
            <br>
            <br>

            <div class="row" id="tabs">
              <div class="col-lg-4">
                <ul>
                  <li><a href='#tabs-2'><i class="fa fa-gift"></i> Opis ponude</a></li>
                  <li><a href='#tabs-4'><i class="fa fa-info-circle"></i> Package Info</a></li>
                 
                  <li><a href='#tabs-6'><i class="fa fa-plus-circle"></i> Komentari</a></li>
                </ul>
              </div>
              <div class="col-lg-8">
                <section class='tabs-content' style="width: 100%;">
                  
                  <article id='tabs-2'>

                    <h4>Specifikacije ponude</h4>

                    <div class="row">
                       <div class="col-sm-6">
                            <label>Dostupno u </label>
                       
                            <p>{{$package->godDoba}}</p>
                       </div>

                       <div class="col-sm-6">
                            <label>Broj nocenja</label>
                       
                            <p>{{$package->brNocenja}}</p>
                       </div>

                       <div class="col-sm-6">
                            <label>Ukljucuje prevoz</label>
                       
                            <p>{{$package->prevoz}}</p>
                       </div>

                       <div class="col-sm-6">
                            <label>Adresa</label>
                       
                            <p>{{$package->adresa}}</p>
                       </div>
                    </div>
                    <br>
                    <br>

                    <h4>Opis ponude</h4>
                    
                   <p>{{$package->opis}}</p>
                   </article>
                  
                  <article id='tabs-4'>
                    <h4>Package Info</h4>

                    <ul class="list-group list-group-no-border">
                      <li class="list-group-item" style="margin:0 0 -1px">
                         <div class="row">
                              <div class="col-md-2 col-sm-3">
                                   <p class="pjVpProductPolicyTitle">
                                        <strong>Check-in</strong>
                                   </p>
                              </div>
                              <div class="col-md-10 col-sm-9">
                                   <p>
                                        Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut accumsan dignissim rutrum.
                                   </p>
                              </div>
                         </div>
                      </li>

                      <li class="list-group-item" style="margin:0 0 -1px">
                           <div class="row">
                                <div class="col-md-2 col-sm-3">
                                     <p>
                                          <strong>Check-out</strong>
                                     </p>
                                </div>

                                <div class="col-md-10 col-sm-9">
                                     <p>
                                          Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut accumsan dignissim rutrum.
                                     </p>
                                </div>
                           </div>
                      </li>

                      <li class="list-group-item" style="margin:0 0 -1px">
                           <div class="row">
                                <div class="col-md-2 col-sm-3">
                                     <p>
                                          <strong>Pets</strong>
                                     </p>
                                </div>
                                <div class="col-md-10 col-sm-9">
                                     <p>
                                          Not allowed
                                     </p>
                                </div>
                           </div>
                      </li>

                      <li class="list-group-item" style="margin:0 0 -1px">
                           <div class="row">
                                <div class="col-md-2 col-sm-3">
                                     <p>
                                          <strong>Policies</strong>
                                     </p>
                                </div>
                                <div class="col-md-10 col-sm-9">
                                     <div>
                                          <p>
                                               Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut accumsan dignissim rutrum. <br>
                                                Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut accumsan dignissim rutrum. <br>
                                          </p>
                                     </div>
                                </div>
                           </div>
                      </li>
                      
                      <li class="list-group-item" style="margin:0 0 -1px">
                           <div class="row">
                                <div class="col-md-2 col-sm-3">
                                     <p>
                                          <strong>Fees</strong>
                                     </p>
                                </div>

                                <div class="col-md-10 col-sm-9">
                                     <div>
                                          <p>
                                               Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut accumsan dignissim rutrum. <br>
                                                Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut accumsan dignissim rutrum. <br>
                                          </p>
                                     </div>
                                </div>
                           </div>
                      </li>
                    </ul>
                  </article>
                  

                  <!-- KOMENTARI -->
                  <article id='tabs-6'>
                    <h4>Komentari</h4>
                    <br>
                    <div class="container scrollable-div">
                         <div class="row">
                             <div class="col-lg-12">
                              @foreach($comments as $comment)
                                   @if($comment->odgovorZa === null)
                                        <x-comment-one-card :comment="$comment" />
                                   @endif
                              @endforeach        
                             </div>
                         </div>
                     </div>
                    <br>
                    <br>
                    <div class="main-button d-flex justify-content-center">
                         <a href="#" data-toggle="modal" data-target="#exampleModal">Dodaj komentar</a>
                    </div>
                    
                  </article>

                </section>
              </div>
            </div>
        </div>
    </section>
    <!-- ***** Fleet Ends ***** -->
    
<!-- POcetak komentara -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Dodaj komentar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-us">
            <div class="contact-form">

              <form action="{{ url()->current() }}" id="contact" method="POST">
               @csrf 
               <input type="hidden" name="package_id" value="{{$package->id}}">
                  <div class="row">
                    <div class="col-md-12">
                         <div class="row">
                              <div class="col-md-6 d-flex justify-content-center">
                                   <fieldset>
                                        <label for="ime">Ime</label>
                                        <input type="text" id="ime" name="ime" class="form-control" placeholder="Unesite vase ime" required="">
                                   </fieldset>
                              </div>
                              <div class="col-md-6 d-flex justify-content-center">
                                   <fieldset>
                                        <label for="prezime">Prezime</label>
                                        <input type="text" id="prezime" name="prezime" class="form-control" placeholder="Unesite vase prezime" required="">
                                   </fieldset>
                              </div>
                         </div>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-12">
                         <fieldset>
                              <label for="komentar">Komentar</label>
                              <textarea id="komentar" name="komentar" class="form-control" placeholder="Napisite komentar ili pitanje" required></textarea>
                         </fieldset>
                       </div>
                  </div>
           </div>
           </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Otkazi</button>
            <button type="submit" name="submitDugme" class="btn btn-primary">Postavi</button>
          </div>
     </form>
        </div>
      </div>
    </div>

<!-- Kraj komentara -->
@endsection