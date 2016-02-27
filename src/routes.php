<?php

Route::group(['namespace' => 'Vicky\MdlProduk\Controllers', 'prefix' => 'vicky/mdlproduk'], function () {
	Route::get('/', ['as' => 'mdlproduk_path', 'uses' => 'MdlProdukController@index']);
});