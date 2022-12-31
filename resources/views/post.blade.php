@extends('layout')

@section('nickname', $post -> $nickname)

$section('caption')
    <h1>{{$post -> $nickname}}</h1>
    <h3>{{$post -> $caption}}</h3>
    

    <br>
    <h2>Comments</h2>
    <div id = "comments">
        
        @forelse($comments as $comment)

        <p>{{$comment->username}}</p>
        <p>{{$comment->comment}}</p>
    @empty
        
    @endforelse


    </div>