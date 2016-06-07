@extends('layouts.master')

@section('title')
Create
@stop

@section('content')
<h1>Add a post</h1>
<form method="POST" action = "{{{ action('PostsController@store') }}}">  
    {{ Form::token() }}
	<div class="form-group">
    	<label>Post title*</label>
    	<br>
        <input class="form-control" name="title" placeholder="Title*" required
        	value="{{{ Input::old('title') }}}">
            {{ $errors->first('title', '<span class="help-block">:message</span>') }}
        <br>
        <label>Image URL</label>
        <br>
        <input class="form-control" name="img_url" placeholder="img-url"
        	value="{{{ Input::old('img_url') }}}">
            {{ $errors->first('img_url', '<span class="help-block">:message</span>') }}
        <br>
        <label>Content*</label>
        <br>
        <textarea class="form-control" rows="3" name="content" placeholder="Content*" required>{{{ Input::old('content') }}}</textarea>
        {{ $errors->first('content', '<span class="help-block">:message</span>') }}
        <br>
        <label>Catagory</label>
        <br>
        <input class="form-control" name="catagory" placeholder="catagory"
        	value="{{{ Input::old('catagory') }}}">
        <br>
        <label>meta-description</label>
        <br>
        <input class="form-control" name="meta_description" placeholder="meta description, 160 characters only" type="text" maxlength="160"
        	value="{{{ Input::old('meta_description') }}}"">
            {{ $errors->first('meta_description', '<span class="help-block">:message</span>') }}
        <br>
    	<button type="submit" class="btn btn-default">Submit</button>
	</div>
</form>  

@stop