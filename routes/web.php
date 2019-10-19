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

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/booking', function(){
    return view('pages.booking');
});
Route::get('/buildings', function(){
    return view('pages.buildings');
});
Route::get('/flats', function(){
    return view('pages.flats');
});
Route::get('/renters', function(){
    return view('pages.renters');
});
Route::get('/deposit', 'DepositController@index')->name('deposit');
Route::get('/expenses', function(){
    return view('pages.expenses');
});
Route::get('/withdraw', function(){
    return view('pages.withdraw');
});
