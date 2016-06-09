@extends('layouts.master')

@section('title')
Edit
@stop

@section('content')
Edit form here

<form method="POST" action = "{{{ action('PostsController@update', $post->id) }}}">  
	<input name="_method" type="hidden" value="PUT">
    {{ Form::token() }}
	<div class="form-group">
    	<label>Post title*</label>
    	<br>
        <input class="form-control" name="title" placeholder="Title*" required
        	value="{{{$post->title}}}">
            {{ $errors->first('title', '<span class="help-block">:message</span>') }}
        <br>
        <label>Image URL*</label>
        <br>
        <input class="form-control" name="img_url" placeholder="img-url*"
        	value="{{{$post->img_url}}}">
            {{ $errors->first('img_url', '<span class="help-block">:message</span>') }}
        <br>
        <label>Content*</label>
        <br>
        <textarea class="form-control" rows="3" name="content" placeholder="Content*" required>{{{$post->content}}}</textarea>
        {{ $errors->first('content', '<span class="help-block">:message</span>') }}
        <br>
        <label>Catagory*</label>
        <br>
        <input class="form-control" name="catagory" placeholder="catagory*"
        	value="{{{$post->catagory}}}">
        <br>
        <label>Summary*</label>
        <br>
        <input class="form-control" name="summary" placeholder="summary*, 160 characters only" type="text" maxlength="160"
        	value="{{{$post->summary}}}"">
            {{ $errors->first('summary', '<span class="help-block">:message</span>') }}
        <br>
    	<button type="submit" class="btn btn-default">Edit</button>
	</div>
</form>  

<form method="POST" action = "{{{ action('PostsController@destroy', $post->id) }}}">
    <input name="_method" type="hidden" value="DELETE">
        {{ Form::token() }}
        <button type="submit" class="btn btn-default">Delete</button>
</form>

@stop