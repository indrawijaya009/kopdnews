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


// get databse kuisioners
Route::get('/user', 'UserController@datauser');





Auth::routes();

Route::group(['middleware'=>['preventbackbutton','auth']], function(){
    
    //home user
    Route::get('/kuisioner', function () {
        return view('datahome/kuisioner');
    });
    
     // kuisioner
    Route::get('/kuisionertingkatI', function () {
        return view('datahome/tingkat/kuisionertingkatI');
    });
    
    //tingkat 1
    Route::get('/kuisionertingkatI', function () {
        return view('datahome/tingkat/kuisionertingkatI');
    });
    
    //post dokumen
    Route::get('/kuisionertingkatI', function () {
        return view('datahome/tingkat/postingkatI/dokumenI');
    });







    
    Route::get('/home', 'HomeController@index')->name('home');
    // Route::middleware('role:admin')->get('/dashboard', 'HomeController@index')->name('dashboard');
    
    Route::middleware('role:admin')->get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    });
