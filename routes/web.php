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

Route::get('/slider', 'ControllerAdmin@readSlider');
Route::get('/addSlider', 'ControllerAdmin@addSlider');
Route::post('/inputSlider', 'ControllerAdmin@inputSlider');
Route::delete('/{id}/delSlider', 'ControllerAdmin@deleteSlider');
Route::get('/{id}/editSlider', 'ControllerAdmin@editSlider');
Route::put('/{id}/editSlider', 'ControllerAdmin@updatetSlider');

Route::get('/galeri', 'ControllerAdmin@readGaleri');
Route::get('/addGaleri', 'ControllerAdmin@addGaleri');
Route::post('/inputGaleri', 'ControllerAdmin@inputGaleri');
Route::delete('/{id}/delGaleri', 'ControllerAdmin@deleteGaleri');
Route::get('/{id}/editGaleri', 'ControllerAdmin@editGaleri');
Route::put('/{id}/editGaleri', 'ControllerAdmin@updatetGaleri');

Route::get('/fitur', 'ControllerAdmin@readFitur');
Route::get('/addFitur', 'ControllerAdmin@addFitur');
Route::post('/inputFitur', 'ControllerAdmin@inputFitur');
Route::delete('/{id}/delFitur', 'ControllerAdmin@deleteFitur');
Route::get('/{id}/editFitur', 'ControllerAdmin@editFitur');
Route::put('/{id}/editFitur', 'ControllerAdmin@updatetFitur');

Route::get('/plan', 'ControllerAdmin@readPlan');
Route::get('/addPlan', 'ControllerAdmin@addPlan');
Route::post('/inputPlan', 'ControllerAdmin@inputPlan');
Route::delete('/{id}/delPlan', 'ControllerAdmin@deletePlan');
Route::get('/{id}/editPlan', 'ControllerAdmin@editPlan');
Route::put('/{id}/editPlan', 'ControllerAdmin@updatetPlan');
//end of admin page

//this is to front page
Route::get('/about', 'ControllerFront@readAbout');
Route::get('/index', 'ControllerFront@readIndex');