@extends('layouts.master')

@section('title')
{{{$screen_name}}}'s' Posts
@stop

@section('content')
<h1>All posts by {{{$screen_name}}}</h1>

@foreach($posts as $i => $post)
	<a href="/posts/{{{$post->id}}}">
    <h2>{{{$post->title}}}</h2>
    <img height="100" src="{{{$post->img_url}}}"></a>
    <p>{{{$post->summary}}}</p>
    <p>Posted: {{{$post->created_at->diffForHumans()}}}</p>
    @if ( $i < count($posts) -1)
    <hr>
    @endif
@endforeach

@stop