<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
	'uses'=>'WebController@home',
	'as'=>'home'
	]);

Route::get('sobrebotbychat', [
	'uses'=>'WebController@about',
	'as'=>'about'
	]);

Route::group(['prefix'=>'panel'],function(){
	Route::get('login',['uses'=>'AuthController@login','as'=>'login']);
	Route::get('logout',['uses'=>'AuthController@logout','as'=>'logout']);
});
