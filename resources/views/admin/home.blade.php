@extends('layout')

@section('nickname', 'Admin')


@section('caption')
    
    @foreach ($posts as $post)
        <h2>{{$post->nickname}}</h2>
        <p>{{$post->caption}}</p>
        <a href="{{route('ShowPostAdmin', ['post'=>$post])}}"><button class="btn btn-primary btn-sm">Post Page</button></a>
        <a href="{{route('DeletePost', ['post' => $post])}}"><button class="btn btn-primary btn-sm">Delete</button></a>


    @endforeach
    <hr>
    <h3>Add a Post</h3>
    <form method="post">
        @csrf
        <input type="text" name="title" placeholder="Post Title"> <br>
        <textarea name="body" cols="40" rows="5"></textarea> <br>
        <button class="btn btn-success" type="submit">Post</button>
    </form>
@endsection