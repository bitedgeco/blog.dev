@extends('layouts.master')

@section('title')
Index of posts
@stop

@section('content')

<h1>All posts</h1>

@foreach($posts as $post)
	<a href="/posts/{{{$post->id}}}">
    <h2>{{{$post->title}}}</h2>
    <img height="100" src="{{{$post->img_url}}}"></a>
    <p>{{{$post->meta_description}}}</p>
    <p>Posted: {{{$post->created_at->diffForHumans()}}}</p>
    <hr>
@endforeach

{{ $posts->links() }}

@stop