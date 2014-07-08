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
Route::resource('file', 'FileController');

Route::get('/', function()
{
	return View::make('file.index');
});

Route::get('counter', function()
{
	return View::make('file.counter');
});

Route::get('submit', function()
{
	return View::make('file.submit');
});
