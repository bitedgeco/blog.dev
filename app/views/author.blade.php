@extends('layouts.master')

@section('title')
Insert Author's name here Profile
@stop

@section('content')
<h1>Welcome {{ Auth::user()->screen_name}}</h1>

@if(count(Auth::user()->posts) > 0)
	<h2>Here are your posts</h2>
@else
	<p>You have not made any posts yet, press Create to make a post or Index to view others posts</p> 
@endif

@foreach(Auth::user()->posts as $i => $post)
	<a href="/posts/{{{$post->id}}}">
    <h3>{{{$post->title}}}</h3>
    <img height="100" src="{{{$post->img_url}}}"></a>
    <p>{{{$post->meta_description}}}</p>
    <p>Posted: {{{$post->created_at->diffForHumans()}}}</p>
    <a href="{{{ action('PostsController@edit', $post->id) }}}" class="btn btn-default">edit/delete</a>
    @if ( $i < count(Auth::user()->posts) -1)
    <hr>
    @endif
@endforeach

@stop