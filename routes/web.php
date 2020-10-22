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





Route::view('/form', 'datahome/kuisioner');
// Route::post('submit','KuisionerController@create');

// Route::view('/uform', 'user');
// Route::post('submit','KuisionerController@insert');


// get databse kuisioners
Route::get('blog', function(){
    return view('datahome/kuisioner');
});
Route::post('/post_rcppemba', 'KuisionerController@post_rcppemba');


Route::get('/data', 'UserController@kuisione');

Route::get('users/{users}/user','UserController@userdatakuisioner');
Route::delete('user/{users}','UserController@destroy');

/////validator
// Route::get('form', 'FormController@create')->name('form.create');
// Route::post('form', 'KuisionerController@create')->name('form.store');




// Route::get('/kuisionertingkatI', 'KuisionerController@create')->name('kuisionertingkatI');
// Route::post('/kuisionertingkatsI', 'KuisionerController@insert')->name('kuisionertingkatsI');

// Route::post('submit','KuisionerController@insert');

Route::get('/user/kuisioner', 'KuisionerController@store');

Route::view('vie', 'user');


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
    Route::get('/userroles', 'KuisionerController@create')->name('userroles');
    Route::post('/userroless', 'KuisionerController@insert')->name('userroless');
    // Route::get('/kuisionertingkatI', function () {
    //     return view('datahome/tingkat/postingkatI/dokumenI');
    // });

    
    Route::get('/home', 'HomeController@index')->name('home');
    // Route::middleware('role:admin')->get('/dashboard', 'HomeController@index')->name('dashboard');
    
    Route::middleware('role:admin')->get('/dashboard', 'UserController@kuisione'
    )->name('dashboard');
    
    });
