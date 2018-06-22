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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/coba', 'cAdmin@index');

//this is to admin page
Route::get('/addArticel', 'cAdmin@addArticel');
Route::get('/articel', 'cAdmin@readArticel');
Route::get('/{id}/editArticel', 'cAdmin@editArticel');
Route::put('/{id}/editArticel', 'cAdmin@updatetArticel');
Route::post('/inputArticel', 'cAdmin@inputArticel');
Route::delete('/{id}/delArticel', 'cAdmin@deleteArticel');

Route::get('/paket', 'cAdmin@readPaket');
Route::get('/addPaket', 'cAdmin@addPaket');
Route::post('/inputPaket', 'cAdmin@inputPaket');
Route::delete('/{id}/delPaket', 'cAdmin@deletePaket');
Route::get('/{id}/editPaket', 'cAdmin@editPaket');
Route::put('/{id}/editPaket', 'cAdmin@updatetPaket');

Route::get('/slider', 'cAdmin@readSlider');
Route::get('/addSlider', 'cAdmin@addSlider');
Route::post('/inputSlider', 'cAdmin@inputSlider');
Route::delete('/{id}/delSlider', 'cAdmin@deleteSlider');
Route::get('/{id}/editSlider', 'cAdmin@editSlider');
Route::put('/{id}/editSlider', 'cAdmin@updatetSlider');

Route::get('/galeri', 'cAdmin@readGaleri');
Route::get('/addGaleri', 'cAdmin@addGaleri');
Route::post('/inputGaleri', 'cAdmin@inputGaleri');
Route::delete('/{id}/delGaleri', 'cAdmin@deleteGaleri');
Route::get('/{id}/editGaleri', 'cAdmin@editGaleri');
Route::put('/{id}/editGaleri', 'cAdmin@updatetGaleri');

Route::get('/fitur', 'cAdmin@readFitur');
Route::get('/addFitur', 'cAdmin@addFitur');
Route::post('/inputFitur', 'cAdmin@inputFitur');
Route::delete('/{id}/delFitur', 'cAdmin@deleteFitur');
Route::get('/{id}/editFitur', 'cAdmin@editFitur');
Route::put('/{id}/editFitur', 'cAdmin@updatetFitur');

Route::get('/plan', 'cAdmin@readPlan');
Route::get('/addPlan', 'cAdmin@addPlan');
Route::post('/inputPlan', 'cAdmin@inputPlan');
Route::delete('/{id}/delPlan', 'cAdmin@deletePlan');
Route::get('/{id}/editPlan', 'cAdmin@editPlan');
Route::put('/{id}/editPlan', 'cAdmin@updatetPlan');

Route::get('/tampilkan/{id}', 'cAdmin@tampilkan');
Route::get('/sembunyikan/{id}', 'cAdmin@sembunyikan');
Route::resource('posts','PostsController');
Route::post('posts/changeStatus', array('as' => 'changeStatus', 'uses' => 'PostsController@changeStatus'));

Route::get('/desa', 'CdesaA@rDesa');
Route::get('/aDesa', 'CdesaA@aDesa');
Route::get('/{id}/eDesa', 'CdesaA@eDesa');
Route::put('/{id}/eDesa', 'CdesaA@uDesa');
Route::post('/inDesa', 'CdesaA@inDesa');
Route::delete('/{id}/delDesa', 'CdesaA@delDesa');

Route::get('/pemesanan', 'cAdmin@pemesanan');
Route::put('/{id}/status', 'cAdmin@status');
Route::delete('/{id}/delPemesanan', 'cAdmin@delPemesanan');
//end of admin page

//this is to front page
Route::get('/', 'CF_index@reIndex');
Route::get('/galeris/{id}', 'CF_galeri@readGal');
Route::get('/peta/{id}', 'CF_peta@peta');
Route::get('/destinasi', 'CF_destinasi@dest');
Route::get('/detailArtikel/{id}', 'CF_detArt@detArt');
Route::get('/artikel/{id}', 'CF_Art@readArt');
Route::get('/order/{id}', 'CF_invoice@order');
Route::post('/checkout', 'CF_invoice@checkout');
Route::get('/invoice/{idsan}/{idpak}', 'CF_invoice@invoice');
Route::get('/invoic/{idsan}/{idpak}', 'CF_invoice@unduh');
Route::get('/confirmation', 'CF_invoice@confirmation');
Route::put('/postKonfirmasi', 'CF_invoice@postKonfirmasi');

//this is to writer page
Route::get('/artikels', 'Cguest@readArticel');
Route::get('/addArtikels', 'Cguest@addArticel');
Route::get('/{id}/editArtikels', 'Cguest@editArticel');
Route::put('/{id}/editArtikels', 'Cguest@updatetArticel');
Route::post('/inputArtikels', 'Cguest@inputArticel');
Route::delete('/{id}/delArtikels', 'Cguest@deleteArticel');