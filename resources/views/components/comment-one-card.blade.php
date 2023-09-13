@props(['comment'])
<?php
use App\Models\Comment;


?>
<style>
    .comment-box {
    background-color: #de0d0d76; /* Boja pozadine */
    padding: 10px; /* Dodajte margine unutar div-a za bolji izgled */
    border-radius: 5px; /* Dodajte zaobljeni ivičnjak za lepši izgled */
}
</style>
<div class="comment-box">
    <h4>{{$comment->ime}} {{$comment->prezime}}</h4>
    <p><em>{{$comment->komentar}} </em></p>
</div>

                    @foreach(App\Models\Comment::all() as $comment1)
                        @if($comment1->odgovorZa == $comment->id)
                            <x-odgovor-one-card :comment1="$comment1"/>
                        @endif
                    @endforeach  
<br>