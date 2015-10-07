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
    return view('welcome');
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//home
Route::get('home', 'HomeController@index');

//dashboard
Route::get('dashboard', [
    'as' => 'route_dashboard', 'uses' => 'DashboardController@index'
]);

//manage
Route::get('manage', [
    'as' => 'route_manage', 'uses' => 'ManageController@index'
]);

//billing
Route::get('billing', [
    'as' => 'route_belling', 'uses' => 'BillingController@index'
]);

// settings
Route::get('settings', [
    'as' => 'route_settings', 'uses' => 'SettingsController@index'
]);

//help
Route::get('help', [
    'as' => 'route_help', 'uses' => 'HelpController@index'
]);

Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});