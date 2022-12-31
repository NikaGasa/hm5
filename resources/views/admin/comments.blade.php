@extends('layout')

@section('nickname', 'Admin')


@section('caption')
    <h1>{{$post->nickname}}</h1>
    <p>{{$post->caption}}</p>
    <hr>
    <h4>Comments</h4>
    <div style="margin-left: 15px">
    @forelse ($comments as $comment)
        <p><strong>{{$comment->nickname}}</strong></p>
        <p>{{$comment->comment}}</p>
        <a href="{{route('deleteComment', ['comment'=> $comment, 'post' => $post])}}"><button class="btn btn-danger btn-sm">Delete</button></a>
    @empty
        <h3>No Comments</h3>
    @endforelse
    </div>
@endsection