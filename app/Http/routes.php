<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	$users = App\User::get();

	foreach($users as $user){
		echo $user->name."<br/>";
		
	}
});

Route::get('menu', ['as' => 'menu', 'uses' => 'MenuController@getMenu']);

Route::get('users', ['as' => 'users', 'uses' => 'UserController@show']);

