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

Route::get('/', 'PostsController@index');

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

Route::post('/logIn', 'HomeController@logIn' );

Route::get('/profile', 'HomeController@profile' );

Route::get('/logOut', 'HomeController@logOut' );