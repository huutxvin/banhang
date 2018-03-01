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
Route::get('banhang/index',['as'=>'trang-chu','uses'=>'PageController@getIndex']);
Route::get('banhang/products/{id}',['as'=>'chi-tiet','uses'=>'PageController@getProducts']);
Route::get('banhang/products_type/{type}',['as'=>'loai-san-pham','uses'=>'PageController@getProductsType']);
Route::get('banhang/contact',['as'=>'lien-he','uses'=>'PageController@getContact']);
Route::get('banhang/about',['as'=>'gioi-thieu','uses'=>'PageController@getAbout']);