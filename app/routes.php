<?php  

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');

Route::get('/resume', 'HomeController@showResume');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::resource('posts', 'PostsController');

Route::get('orm-test', function ()
{
$post = Post::find(1);
$post->delete();
});


Route::get('/sayhello/{name?}', function($name = 'world')
{
    return View::make('my-first-view');
});

Route::get('/roll-dice/{guess}', function($guess)
{
	$rand = mt_rand (1,6);
	$message = ($rand == $guess) ? 'correct' :'not correct';
	$data = [];
	$data ['rand'] = $rand;
	$data ['guess'] = $guess;
	$data ['message'] = $message;

    return  View::make('roll-dice')->with($data);  
});