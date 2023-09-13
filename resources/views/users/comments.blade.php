@extends('users/layout')

@section('content')


<section class="section" id="trainers">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h2>Komentari</h2>
                    <img src="{{asset('images/line-dec.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<br>

<section class="section" id="trainers">
    <div class="container">       
            @foreach($comments as $key => $comment)
            @if($comment->odgovorZa === null)
            
            <div class="row"></div>
                <x-commentd1-one-card :comment="$comment" />
            @endif
            @endforeach
        
        </div>
</section>
