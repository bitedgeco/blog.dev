<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function __construct()
	{
		$this->beforeFilter('auth', ['except' =>['index', 'show', 'author']]);
	}

	public function index() 
	{
		$posts = Post::paginate(10);

    	return View::make('posts.index')->with('posts', $posts);	
	}

	public function author($screen_name) 
	{
		$posts = Post::getIdFromSceenName($screen_name);

    	return View::make('author')->with('posts', $posts)->with('screen_name', $screen_name);	
	}

	public function catagory($catagory) 
	{
		$posts = Post::getCatagory($catagory);

    	return View::make('posts.catagory')->with(['posts' => $posts, 'catagory' => $catagory]);	
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
    	return View::make('posts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$validator = Validator::make(Input::all(), Post::$rules);

		if ($validator->fails()) {

			$inputsForLog = Input::all();
			$logMsg = '';
			foreach ($inputsForLog as $field => $userEntered) {
				$logMsg .= "{$field}: {$userEntered}" .PHP_EOL;
			}
			Log::info("failed to validate, inputs were $logMsg");
			Session::flash('errorMessage', 'Failed to creat');
			return Redirect::back()->withInput()->withErrors($validator);
		} else {
			$post = new Post();
			$post->title = Input::get('title');
			$post->content = Input::get('content');
			$post->img_url = Input::get('img_url');
			$post->catagory = Input::get('catagory');
			$post->summary = Input::get('summary');
			$post->user_id = Auth::user()->id;

			if ($post->save()) {
				Session::flash('successMessage', 'Successfuly created!');
				return Redirect::action('PostsController@index');
			} else {
				Log::info('failed to save');
				Session::flash('errorMessage', 'Failed to creat');
				return Redirect::back()->withInput();
			}
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

	try{ 
		$post = Post::findOrFail($id);
	} catch (Exception $e) {
		App::abort(404);
	}

	return View::make('posts.show')->with('post', $post);

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);
		if (Auth::id() == $post->user->id){
			return View::make('posts.edit')->with('post', $post);
		} else {
			Session::flash('errorMessage', 'You can not edit other peopels posts');
			return Redirect::to('/'); 
		}
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make(Input::all(), Post::$rules);

		if ($validator->fails()) {
			Session::flash('errorMessage', 'Failed to edit');
			return Redirect::back()->withInput()->withErrors($validator);
		} else {
			$post = Post::find($id);
			$post->title = Input::get('title');
			$post->content = Input::get('content');
			$post->img_url = Input::get('img_url');
			$post->catagory = Input::get('catagory');
			$post->summary = Input::get('summary');
			if ($post->save()) {
				Session::flash('successMessage', 'Successfull edit!');
				return Redirect::action('PostsController@show', $post->id);
			} else {
				Session::flash('errorMessage', 'Failed to edit');
				return Redirect::back()->withInput();
			}
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::find($id);
		$post->delete();
		Session::flash('successMessage', 'Successfuly deleted!');
		return Redirect::action('PostsController@index');
	}
}
