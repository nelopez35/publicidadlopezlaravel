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

Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');
Route::get('/{categorias}', 'HomeController@show');
Route::post('send', ['as' => 'send', 'uses' => 'MailController@send'] );
Route::get('contactanos', ['as' => 'contactanos', 'uses' => 'MailController@index'] );