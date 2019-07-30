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

/*Hien thi trang chu, truyen vao controller de get view index*/
Route::get('index', [
	'as'=>'trang-chu',
	'uses'=>'PageController@getIndex'
]);

/*Hien thi page loai san pham*/
Route::get('product_type/{type}', [
	'as'=>'productType',
	'uses'=>'PageController@getProductType'
]);

/*Hien thi chi tiet 1 san pham*/
Route::get('product_detail/{id}', [
	'as'=>'productDetail',
	'uses'=>'PageController@getProductDetail'
]);

/*Hien thi noi dung trang contact*/
Route::get('contact', [
	'as'=>'contact',
	'uses'=>'PageController@getContact'
]);

/*Hien thi noi dung trang about*/
Route::get('about', [
	'as'=>'about',
	'uses'=>'PageController@getAbout'
]);