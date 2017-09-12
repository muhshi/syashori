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

Route::get('/', 'InfografisController@index');



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


#Infografis
Route::get('/4elemen', 'InfografisController@elemen');
Route::get('/info1', 'InfografisController@info1');
Route::get('/insta', 'InfografisController@insta');

Route::get('/pst', 'PstController@index');
Route::get('/pst/home', 'PstController@index');
Route::post('/pst/store', 'PstController@store');
Route::get('/pst/show', 'PstController@show');
Route::get('/pst/skd', 'PstController@skd');
Route::post('/pst/skd', 'PstController@skd');
Route::delete('/pst/delete/{pst}', 'PstController@delete');
Route::get('/pst/monitoring', 'PstController@monitoring');
Route::get('/pst/edit/{pst}', 'PstController@edit');
Route::post('/pst/update', 'PstController@update');
