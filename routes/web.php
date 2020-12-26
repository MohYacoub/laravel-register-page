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


//Auth::routes();
//
//
//Route::get('/home', 'HomeController@index')->name('home');
////Route::get('/register', 'RegisterController@create');
//Route::get('/readuser', function (){
//
//    return view('UsersTable');
//});

Route::get('/','RegisterUserController@home');
Route::get('/readusers','RegisterUserController@create');
Route::get('/register','RegisterUserController@index');
Route::get('/delete/{id}','RegisterUserController@destroy');
Route::get('/edit/{id}','RegisterUserController@edit');

Route::post('/userregister','RegisterUserController@userform');
Route::post('/edit/{id}','RegisterUserController@update');
//Route::get('/reg','RegisterController@userform');
//Route::post('/form','RegisterController@userform');

//Route::view("reg"."register");
//Route::get('/register',function (){
//    return view('register');
//});


