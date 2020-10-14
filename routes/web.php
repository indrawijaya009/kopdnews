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

Route::group(['middleware'=>['preventbackbutton','auth']], function(){

    Route::get('/home', 'HomeController@index')->name('home');
    // Route::middleware('role:admin')->get('/dashboard', 'HomeController@index')->name('dashboard');
    
    Route::middleware('role:admin')->get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    });
