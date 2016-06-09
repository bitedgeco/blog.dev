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
        <label>Image URL*</label>
        <br>
        <input class="form-control" name="img_url" placeholder="img-url" required
        	value="{{{ Input::old('img_url') }}}">
            {{ $errors->first('img_url', '<span class="help-block">:message</span>') }}
        <br>
        <label>Content*</label>
        <br>
        <textarea class="form-control" rows="3" name="content" placeholder="Content*" required>{{{ Input::old('content') }}}</textarea>
        {{ $errors->first('content', '<span class="help-block">:message</span>') }}
        <br>
        <label>Catagory*</label>
        <br>
        <input class="form-control" name="catagory" placeholder="catagory" required
        	value="{{{ Input::old('catagory') }}}">
        <br>
        <label>Summary*</label>
        <br>
        <input class="form-control" name="summary" placeholder="summary, 160 characters only" type="text" maxlength="160" required
        	value="{{{ Input::old('summary') }}}"">
            {{ $errors->first('summary', '<span class="help-block">:message</span>') }}
        <br>
    	<button type="submit" class="btn btn-default">Submit</button>
	</div>
</form>  

@stop