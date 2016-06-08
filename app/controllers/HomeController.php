<?php

class HomeController extends BaseController 
{

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function Profile()
	{
		if (Auth::check()){
			return View::make('profile');
		} else {
			return Redirect::to('/');
		}
	}

	public function logIn()
	{

		$validator = Validator::make(Input::all(), User::$rules);

		// dd(Input::get('email'), Input::get('password'));

		if ($validator->passes()) {
			$email = Input::get('email');
			$password = Input::get('password');

			if (Auth::attempt(array('email' => $email, 'password' => $password))) {
				Session::flash('successMessage', 'Successfuly logged in!');
		    	return Redirect::action('HomeController@profile');
    		}
    	}

		Session::flash('errorMessage', 'Failed to log in');
		return Redirect::back();
	}

	public function logOut()
	{
		Auth::logout();
		return Redirect::to('/');
	}
}


 