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

Route::get('/','GeustController@show')->name('index');
Route::get('/search','GeustController@search')->name('library');
Route::get('/contact-us','GeustController@showcontact')->name('showcontact');
Route::post('/contact-us','GeustController@contact')->name('contactus');
route::get('/details/{id}','GeustController@showdetails')->name('showdetails');


Route::prefix('admin')->group(function(){
    Route::get('/','BookController@index')->name('land_page');
    Route::get('/Create','BookController@create')->name('add_book');
    Route::post('/Create','BookController@store')->name('store_book');
    Route::delete('/delete/{id}','BookController@destroy')->name('del_book');
    Route::get('/edit/{id}','BookController@edit')->name('edit_book');
    Route::put('/edit/{id}','BookController@update')->name('update_book');
    Route::get('search','BookController@search')->name('search_book');
    Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
    Route::get('/profile/{user}','UserController@edit')->name('profile_edit');
    Route::put('/profile/{user}','UserController@update')->name('profile_update');
    Route::put('/edit/addsell/{id}','BookController@add_sell')->name('add_sell');
    Route::put('/edit/minsell/{id}','BookController@min_sell')->name('min_sell'); 
    Route::get('/message','BookController@messages')->name('messages');
    Route::delete('/delmsg/{id}','BookController@delmsg')->name('delmsg');
    Route::get('/showmsg/{id}','BookController@showmsg')->name('showmsg');
});
Auth::routes();

Route::get('/register','HomeController@noregister')->name('no_register');


