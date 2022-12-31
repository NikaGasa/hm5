@extends('layout')

@section('nickname', 'Home')


@section('caption')
    @forelse ($posts as $post)
        <a href="{{route('showPost', ['post'=> $post])}}"><h3>{{$post->nickname}}</h3></a>
        <p>{{$post->caption}}</p>   
        <br>
    @empty
        <h3>No Posts Available</h3>
    @endforelse
@endsection