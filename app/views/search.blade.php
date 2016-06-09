@extends('layouts.master')

@section('title')
Results for {{{$searchTerm}}}
@stop

@section('content')

@if(count($posts) < 1)

<h1>There are no results for {{{$searchTerm}}}</h1>

@else

<h1>All results for {{{$searchTerm}}}</h1>

@endif

@foreach($posts as $i => $post)
	<a href="/posts/{{{$post->id}}}">
    <h2>{{{$post->title}}}</h2>
    <img height="100" src="{{{$post->img_url}}}"></a>
    <p>{{{$post->summary}}}</p>
    <p>Posted {{{$post->created_at->diffForHumans()}}}</p>
    <p>Author: <a href="{{{ action('PostsController@author', $post->user->screen_name) }}}">{{{$post->user->screen_name}}}</a></p>
    <p>Catagory: <a href="{{{ action('PostsController@catagory', $post->catagory) }}}">{{{$post->catagory}}}</a></p>
    @if ( $i < count($posts) -1)
    <hr>
    @endif
@endforeach


{{ $posts->links() }}

@stop