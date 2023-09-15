@props(['comment'])

<style>
    .comment-box {
    background-color: #B0B0B0;
    padding: 10px; 
    border-radius: 5px; 
}
</style>
<div class="comment-box">
    <div class="row" style="display: flex; justify-content: space-between;padding: 15px;">
        <h4>{{$comment->ime}} {{$comment->prezime}}   <a href="/dashboard/ponuda/{{App\Models\Package::find($comment->package_id)->id}}">{{App\Models\Package::find($comment->package_id)->naslov}}</a></h4>
        <div style="display: flex; gap: 10px;">
            <a href="/dashboard/comment/{{$comment->id}}">Opcije</a>
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