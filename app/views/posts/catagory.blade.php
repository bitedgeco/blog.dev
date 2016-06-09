@extends('layouts.master')

@section('title')
{{{$catagory}}} Posts
@stop

@section('content')

@if (count($posts) <1)

<h1>There are no results for the catagory {{{$catagory}}}</h1> 

@else

<h1>All posts in the catagory {{{$catagory}}}</h1> 

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

@endif

@stop