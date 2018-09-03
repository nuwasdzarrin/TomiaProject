<?php
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
Route::get('/cari-tagihan', 'CF_invoice@tagihan');
Route::put('/postSearch', 'CF_invoice@searchInv');
//end of front page
//this is to writer page
Route::get('/artikels', 'Cguest@readArticel');
Route::get('/addArtikels', 'Cguest@addArticel');
Route::get('/{id}/editArtikels', 'Cguest@editArticel');
Route::put('/{id}/editArtikels', 'Cguest@updatetArticel');
Route::post('/inputArtikels', 'Cguest@inputArticel');
Route::delete('/{id}/delArtikels', 'Cguest@deleteArticel');
//end of writer
//pokdarwis route
Route::get('/art', 'CA_desa@readArticel');
Route::get('/addArt', 'CA_desa@addArticel');
Route::get('/{id}/editArt', 'CA_desa@editArticel');
Route::put('/{id}/editArt', 'CA_desa@updatetArticel');
Route::post('/inputArt', 'CA_desa@inputArticel');
Route::delete('/{id}/delArt', 'CA_desa@deleteArticel');

Route::get('/pkt', 'CA_desa@readPaket');
Route::get('/addPkt', 'CA_desa@addPaket');
Route::post('/inputPkt', 'CA_desa@inputPaket');
Route::delete('/{id}/delPkt', 'CA_desa@deletePaket');
Route::get('/{id}/editPkt', 'CA_desa@editPaket');
Route::put('/{id}/editPkt', 'CA_desa@updatetPaket');

Route::get('/gal', 'CA_desa@readGaleri');
Route::get('/addGal', 'CA_desa@addGaleri');
Route::post('/inputGal', 'CA_desa@inputGaleri');
Route::delete('/{id}/delGal', 'CA_desa@deleteGaleri');
Route::get('/{id}/editGal', 'CA_desa@editGaleri');
Route::put('/{id}/editGal', 'CA_desa@updatetGaleri');

Route::get('/vdo', 'CA_desa@readVdo');
Route::get('/addVdo', 'CA_desa@addVdo');
Route::post('/inputVdo', 'CA_desa@inputVdo');
Route::delete('/{id}/delVdo', 'CA_desa@deleteVdo');
Route::get('/{id}/editVdo', 'CA_desa@editVdo');
Route::put('/{id}/editVdo', 'CA_desa@updatetVdo');

Route::get('/sli', 'CA_desa@readSlider');
Route::get('/{id}/editSli', 'CA_desa@editSlider');
Route::put('/{id}/editSli', 'CA_desa@updatetSlider');

Route::get('/ord', 'CA_desa@pemesanan');
Route::put('/{id}/sta', 'CA_desa@status');
Route::delete('/{id}/delOrd', 'CA_desa@delPemesanan');

Route::get('/tampil/{id}', 'CA_desa@tampilkan');
Route::get('/sembunyi/{id}', 'CA_desa@sembunyikan');

Route::get('/cbt', 'CA_desa@dash');
//end pokdarwis
Route::get('laravel-version', function()
{
$laravel = app();
return "Your Laravel version is ".$laravel::VERSION;
});