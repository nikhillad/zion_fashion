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

Route::get('/', ['as' => 'home', 'uses' => 'IndexController@index']);
Route::post('contact_us/submit',['as' => 'contact_us_submit','uses' => 'IndexController@contact_us_form']);
Route::get('show_category_wise_option/{category}',['as' => 'show_category_wise_option','uses' => 'IndexController@show_items_categorywise']);

// Route::get('home', 'HomeController@index');


// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);
