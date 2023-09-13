@props(['comment1'])

<style>
    .comment-box1 {
    background-color: #2900925a;
    padding: 0px 20px; 
    border-radius: 5px; 
    margin-left: 20px; 
    margin-top: 8px;
}
</style>
<div class="comment-box1">
    <h4>{{$comment1->ime}} admin</h4>
    <p><em>{{$comment1->komentar}} </em></p>
</div>
<br>