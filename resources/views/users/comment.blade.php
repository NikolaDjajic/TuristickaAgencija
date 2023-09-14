@extends('users/layout')

@section('content')

@auth

<style>
     .comment-box {
     background-color: #d7c8c8; /* Boja pozadine */
     padding: 10px; /* Dodajte margine unutar div-a za bolji izgled */
     border-radius: 5px; /* Dodajte zaobljeni ivičnjak za lepši izgled */
 }
 </style>
 <section class="section section-bg" id="call-to-action" style="background-image: url({{asset('images/banner-image-1-1920x500.jpg')}})">
 </section>
 
<section class="section" id="trainers">
     <div class="container">
         <div class="row">
             <div class="col-lg-6 offset-lg-3">
                 <div class="section-heading">
                     
                 </div>
             </div>
         </div>
     </div>
 </section>

 <section class="section" id="trainers">
     <div class="container">
     <div class="comment-box">
          <div class="row" style="display: flex; justify-content: space-between; padding: 15px;">
              <h4>{{ $comment->ime }} {{ $comment->prezime }}</h4>
              <div style="display: flex; gap: 10px;">
                  <a href="/dashboard/comment/{{ $comment->id }}/edit">Odgovori</a>
                  <form action="/dashboard/comment/{{ $comment->id }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit">Obriši</button>
                  </form>
              </div>
          </div>
          <p><em>{{ $comment->komentar }}</em></p>
      </div>


      <div class="reply-form">
          <form action="/dashboard/comment/{{ $comment->id }}" method="POST" style="display: flex; flex-direction: column; align-items: center;">
              @csrf
              <br>
              <br>
              <input type="hidden" name="package_id" value="{{$comment->package_id}}">
              <input type="hidden" name="odgovorZa" value="{{$comment->id}}">
              <input type="hidden" name="ime" value="{{auth()->user()->name}}">
              <input type="hidden" name="prezime" value="{{auth()->user()->email}}">

              <div>
                  <textarea name="komentar" rows="4" cols="50" placeholder="Odgovorite na komentar"></textarea>
              </div>
              <br>
              <br>
              <div>
                  <button type="submit">Odgovori</button>
              </div>
          </form>
      </div>



     </div>
 </section>
@endauth

@endsection