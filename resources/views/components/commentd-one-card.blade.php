@props(['comment'])

<style>
    .comment-box {
    background-color: #db0404; /* Boja pozadine */
    padding: 10px; /* Dodajte margine unutar div-a za bolji izgled */
    border-radius: 5px; /* Dodajte zaobljeni ivičnjak za lepši izgled */
}
</style>
<div class="comment-box">
    <div class="row" style="display: flex; justify-content: space-between;padding: 15px;">
        <h4>{{$comment->ime}} {{$comment->prezime}}</h4>
        <div style="display: flex; gap: 10px;">
            <a href="/dashboard/comment/{{$comment->id}}">Izmjeni komentar</a>
        </div>
    </div>
    <p><em>{{$comment->komentar}} </em></p>
</div>

                    @foreach(App\Models\Comment::all() as $comment1)
                        @if($comment1->odgovorZa == $comment->id)
                        <div class="row">
                            <x-odgovor-one-card :comment1="$comment1"/>
                        </div>
                        @endif
                    @endforeach  
<br>