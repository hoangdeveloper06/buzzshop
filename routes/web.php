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
Route::get('products',[
    'as'=>'san-pham',
    'uses'=>'PageController@getProduct'
]);

//Trang chi tiết sản phẩm
Route::get('productdetail/{id}',[
    'as'=>'chitietsanpham',
    'uses'=>'PageController@getProductDetail'
]);

//Trang danh sách sản phẩm theo danh muc
Route::get('categories/{type}',[
    'as'=>'san-phan-danh-muc',
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
// Route::get('signup',[
//     'uses'=>'PageController@getSignup',
//     'as'=>'signup'
// ]);

// Route::post('signup',[
//     'uses'=>'PageController@postSignup',
//     'as'=>'signup'
// ])

Route::get('add-to-cart/{id} ',[
    'as'=>'themgiohang',
    'uses'=> 'PageController@getAddtocart'
]);

Route::get('viewcart',[
    'as'=>'viewcart',
    'uses'=> 'PageController@getCart'
]);

Route::get('checkout',[
    'as'=>'thanhtoan',
    'uses'=> 'PageController@getCheckOut'
]);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

