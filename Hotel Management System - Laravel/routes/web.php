<?php

/**
      created by zahid Hossain
      Date: 07/12/2018
*/


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
    return view('Home.index');
});

// Route::group(['middleware'=>['session']],function(){


// });

//home-url
Route::get('/home','homeController@index')->name('home.index');

//hotel-url
Route::get('/hotel','hotelController@index')->name('hotel.index');
Route::post('/hotel','hotelController@search')->name('hotel.search');



Route::get('/hotel-show/{id}/show','hotelController@showHotel')->name('hotel.showHotel');




Route::get('/hotel-profile','hotelController@show')->name('hotel.profile');
Route::get('/hotel-profile/{id}/edit','hotelController@edit')->name('hotel.edit');
Route::post('/hotel-profile/{id}/edit','hotelController@profileUpdate')->name('hotel.profileUpdate');

Route::get('/myPosts','hotelController@myPosts')->name('hotel.myPosts');
Route::get('/myPosts/{id}/edit','hotelController@editMypost')->name('hotel.editMypost');
Route::post('/myPosts/{id}/edit','hotelController@postMyEditPost')->name('hotel.postMyEditPost');


Route::get('/post-package','hotelController@package')->name('hotel.package');
Route::post('/post-package','hotelController@packagePost')->name('hotel.packagePost');


//hotel-post-url
Route::get('/hotel-post','hotelPostController@index')->name('hotelPost.index');
Route::post('/hotel-post','hotelPostController@search')->name('hotelPost.search');
Route::get('/myPosts/{id}/delete','hotelPostController@postDelete')->name('hotelPost.postDelete');


//book hotel
Route::get('/hotel-book/{id}/book','hotelPostController@book')->name('hotelPost.book');
Route::post('/hotel-book/{id}/book','hotelPostController@bookStore')->name('hotelPost.bookStore');



//user -url
Route::get('/user-profile','userController@profile')->name('user.profile');
Route::get('/user-profile/{id}/edit','userController@edit')->name('user.edit');
Route::post('/user-profile/{id}/edit','userController@update')->name('user.update');


//login-url
Route::get('/login','loginController@index')->name('login.index');
Route::post('/login','loginController@verify')->name('login.verify');

Route::get('/login-hotel','loginController@hotel')->name('login.hotel');
Route::post('/login-hotel','loginController@hotelVerify')->name('login.hotelVerify');


Route::get('/login-admin','loginController@admin')->name('login.admin');
Route::post('/login-admin','loginController@adminVerify')->name('login.adminVerify');

//signup -url
Route::get('/signup-user','signUpController@index')->name('signup.index');
Route::post('/signup-user','signUpController@store')->name('signup.store');

Route::get('/signup-hotel','signUpController@hotel')->name('signup.hotel');
Route::post('/signup-hotel','signUpController@hotelStore')->name('signup.hotelStore');


//logout - url
Route::get('/logout','logoutController@index')->name('logout.index');


//admin - url
Route::get('/admin','adminController@index')->name('admin.index');
Route::get('/admin-hotel','adminController@hotel')->name('admin.hotel');
Route::get('/admin-user','adminController@user')->name('admin.user');