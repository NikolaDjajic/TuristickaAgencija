@extends('users/layout')

@section('content')

@auth

<style>
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

 </style>
<section class="section section-bg" id="call-to-action" style="background-image: url({{asset('images/banner-image-1-1920x500.jpg')}})">
</section>
     <!-- Page Content  -->
     
          <section class="section" id="trainers">
               <div class="container">
                   <div class="row">
                       <div class="col-lg-12">
                           <div class="section-heading">
                               <h2>Dodajte novog <em> admina</em></h2>
                               <img src="{{asset('images/line-dec.png')}}" alt="">
                               <br>
                               
                               <form method="POST" action="/dashboard/addAdmin">
                                   @csrf
                                        <fieldset>
                                        <label for="name">Ime</label>
                                        <div style="display: flex; justify-content: center;">
                                            <input type="text" id="name" name="name" class="form-control" 
                                                   style="width: 270px;" placeholder="Unesite vase ime" required="">
                                        </div>
                                        </fieldset>
                                        <br>
                                        <fieldset>
                                             <label for="password">E-mail</label>
                                             <div style="display: flex; justify-content: center;">
                                                 <input type="text" id="email" name="email" class="form-control" 
                                                        style="width: 270px;" placeholder="Unesite vas email" required="">
                                             </div>
                                         </fieldset>
                                        <br>
                                        <fieldset>
                                             <label for="password">Lozinka</label>
                                             <div style="display: flex; justify-content: center;">
                                                 <input type="password" id="password" name="password" class="form-control" 
                                                        style="width: 270px;" placeholder="Unesite vasu lozinku" required="">
                                             </div>
                                         </fieldset>
                                        <br>
                                        <div class="main-button1 mb-3">
                                             <input type="submit" value="Dodaj">
                                        </div>      
                                   </form>
                           </div>
                       </div>
                   </div>
               </div>
           </section>

@endauth

@endsection