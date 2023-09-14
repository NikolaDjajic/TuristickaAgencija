@props(['comment'])
<?php
use App\Models\Comment;


?>
<style>
    .comment-box {
    background-color:  #B0B0B0; 
    padding: 10px; 
    border-radius: 5px; 
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