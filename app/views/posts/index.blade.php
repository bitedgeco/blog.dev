@extends('layouts.master')

@section('title')
Index of posts
@stop

@section('content')

<h1>All posts</h1>

@foreach($posts as $i => $post)
	<a href="/posts/{{{$post->id}}}">
    <h2>{{{$post->title}}}</h2>
    <img height="100" src="{{{$post->img_url}}}"></a>
    <p>{{{$post->meta_description}}}</p>
    <p>Posted: {{{$post->created_at->diffForHumans()}}} by <a href="{{{ action('PostsController@author', $post->user->screen_name) }}}">{{{$post->user->screen_name}}}</a></p>
    @if ( $i < count($posts) -1)
    <hr>
    @endif
@endforeach

{{ $posts->links() }}

@stop