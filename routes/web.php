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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

//this is to admin page
Route::get('/addArticel', 'ControllerAdmin@addArticel');
Route::get('/articel', 'ControllerAdmin@readArticel');
Route::get('/{id}/editArticel', 'ControllerAdmin@editArticel');
Route::put('/{id}/editArticel', 'ControllerAdmin@updatetArticel');
Route::post('/inputArticel', 'ControllerAdmin@inputArticel');
Route::delete('/{id}/delArticel', 'ControllerAdmin@deleteArticel');

Route::get('/paket', 'ControllerAdmin@readPaket');
Route::get('/addPaket', 'ControllerAdmin@addPaket');
Route::post('/inputPaket', 'ControllerAdmin@inputPaket');
Route::delete('/{id}/delPaket', 'ControllerAdmin@deletePaket');
Route::get('/{id}/editPaket', 'ControllerAdmin@editPaket');
Route::put('/{id}/editPaket', 'ControllerAdmin@updatetPaket');

//end of admin page

//this is to front page
Route::get('/about', function () {
    return view('about');
});