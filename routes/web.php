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
//Trang chủ
Route::get('index', [
    'as'=>'trang-chu',
    'uses'=>'PageController@getIndex'
]);

//Trang giới thiệu
Route::get('about',[
    'as'=>'gioi-thieu',
    'uses'=>'PageController@getAbout'
]);

//Trang danh sách sản phẩm
Route::get('categories',[
    'as'=>'loai-san-pham',
    'uses'=>'PageController@getCategory'
]);

//Trang liên hệ
Route::get('contact',[
    'as'=>'lien-he',
    'uses'=>'PageController@getContact'
]);
//Trang tin tức
Route::get('news',[
    'as'=>'tin-tuc',
    'uses'=>'PageController@getNew'
]);
