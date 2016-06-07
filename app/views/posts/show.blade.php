@extends('layouts.master')

@section('title')
{{{$post->title}}}
@stop

@section('content')

    <h1>{{{$post->title}}}</h1>
    <p>Posted by : {{{$post->user->screen_name}}}</p>
    <p>Date posted: {{{
                        $post
                        ->created_at
                        ->setTimezone('America/Chicago')
                        ->format('l, F jS Y')}}}</p>
    <img height="300" src="{{{$post->img_url}}}">
    <div>
    	{{{$post->content}}}
    </div>
    <br>
    Catagories: {{{$post->catagory}}}
    <br>
    <a href="{{{ action('PostsController@edit', $post->id) }}}" class="btn btn-default">edit/delete</a>

@stop


