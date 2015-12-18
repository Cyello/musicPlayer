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


Route::group(['as' => '/music.', 'prefix' => '/music'], function() {
	Route::get('/', ['as' => 'index', 'uses' => 'PlayerController@index']);
	Route::get('/novo', ['as' => 'create', 'uses' => 'PlayerController@create']);
	Route::match(['post'],'/insere', ['as' => 'store', 'uses' => 'PlayerController@store']);
	Route::get('/edita', ['as' => 'edit', 'uses' => 'PlayerController@edit']);
	Route::post('/atualiza', ['as' => 'update', 'uses' => 'PlayerController@update']);
	Route::get('/remove', ['as' => 'destroy', 'uses' => 'PlayerController@destroy']);
});

Route::get('/', function () {
    return view('welcome');
});
