@extends('users/layout')
<style>
     .custom-input-height {
         height: 300px; 
     }

    .scrollable-div {
        height: 500px; 
        overflow: auto;
    }

    .main-button1 input {
  display: inline-block;
  font-size: 15px;
  padding: 12px 20px;
  background-color: #ed563b;
  color: #fff;
  text-align: center;
  font-weight: 400;
  text-transform: uppercase;
  transition: all .3s;
}

.main-button1 input:hover {
  background-color: #f9735b;
  color: #fff;
}

  .carousel-inner img {
    width: 100%;
    height: 400px;
    object-fit: cover; 
  }
</style>

@section('content')

    <!-- ***** Call to Action Start ***** -->
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

                        <div class="row justify-content-center">
                              <form method="POST" action="/dashboard/ponuda/{{$package->id}}">
                                   @csrf
                                   @method('DELETE')
                                   <div class="main-button1 mb-3">
                                        <input type="submit" value="Obrisi">
                                   </div>                                   
                              </form>
                         </form>
                         </div>
                     </div>
                     
                    </div>
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
                   <img src="{{ asset('storage/' . $package->slika) }}" alt="Slika">
               </div>
               <div class="carousel-item">
                 <img class="d-block w-100" src="{{asset('images/package-image-1-1200x600.jpg')}}" alt="Second slide">
               </div>
               <div class="carousel-item">
                   <img class="d-block w-100" src="{{asset('images/package-image-1-1200x600.jpg')}}" alt="Second slide">
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
                  <li><a href='#tabs-6'><i class="fa fa-map-marker"></i> Komentari</a></li>
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
                                 <label>Hotel</label>
                                 <p>{{$package->hotel}}, {{$package->adresa}}</p>
                            </div>
                         </div>
                         <br>
                         <br>
     
                         <h4>Opis ponude</h4>
                         
                        <span>{{$package->opis}}</span>
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
                              <x-commentd-one-card :comment="$comment" />
                              @endif            
                            @endforeach        
                             </div>
                         </div>
                     </div>
                    <br>
                    <br>
                    
                    
                  </article>

                </section>
              </div>
            </div>
        </div>
    </section>
    <!-- ***** Fleet Ends ***** -->
    
<!-- POcetak komentara -->
    <!-- Modal -->
 

<!-- Kraj komentara -->
@endsection