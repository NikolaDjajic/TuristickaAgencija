@props(['comment1'])

<style>
    .comment-box1 {
    background-color: #9E9E9E;
    padding: 0px 20px; 
    border-radius: 5px; 
    margin-left: 30px; 
    margin-top: 8px;
}
</style>
<div class="comment-box1">
    <div class="row">
    <h4>{{$comment1->ime}} &nbsp;<h5 style="color: green;">   admin</h5></h4>
    </div>
    <p><em>{{$comment1->komentar}} </em></p>
</div>
