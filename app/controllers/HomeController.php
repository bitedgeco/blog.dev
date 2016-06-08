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

		$validator = Validator::make(Input::all(), User::$logInRules);

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


	public function storeUser()
	{
		$validator = Validator::make(Input::all(), User::$NewUserRules);

		if ($validator->fails()) {
			Session::flash('errorMessage', 'Failed to creat user');
			return Redirect::back()->withInput()->withErrors($validator);

		} else {

			if (User::findByScreenNameOrEmail(Input::get('screen_name')) || User::findByScreenNameOrEmail(Input::get('email'))){
				Session::flash('errorMessage', 'Screen name or email already in use');
				return Redirect::back();
			}

			$user = new User();
			$user->screen_name = Input::get('screen_name');
			$user->email = Input::get('email');
			$user->password = Input::get('password');

			if ($user->save()) {
				Session::flash('successMessage', 'Successfuly created please log in!');
				return Redirect::back();
			} else {
				Session::flash('errorMessage', 'Failed to creat user');
				return Redirect::back()->withInput();
			}
		}
	}	


}


 