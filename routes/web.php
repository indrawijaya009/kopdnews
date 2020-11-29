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


Route::get('/edit', function () {
    return view('useradmin/edit');
});

Route::get('submit','UserController@edituser');

// Route::view('/uform', 'user');
// Route::post('submit','KuisionerController@insert');


// get databse kuisioners
Route::get('blog', function(){
    return view('datahome/kuisioner');
});
Route::post('/post_rcppemba', 'KuisionerController@post_rcppemba')->name('post_rcppemba');


Route::get('/data', 'UserController@kuisione');

Route::get('users/{users}/user','UserController@userdatakuisioner');
Route::delete('user/{users}','UserController@destroy');

/////validator
// Route::get('form', 'FormController@create')->name('form.create');
// Route::get('/download', function(){
//     $file = public_path()."/indra.pdf";
//     $headers = array(
//         'Content-Type: application/pdf',
//     ); 
//     return Response::download($file, "Input Group.pdf", $headers);
// });

Route::get('downloadFile', 'KuisionerController@downloadFile');


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
    Route::get('/kuisioner/{tingkat}', function () {
        return view('datahome/tingkat/kuisionertingkatI');
    });
    
    //post dokumen
    Route::get('/kuisioner-dokumen/{tingkat}/{id}', 'KuisionerController@create')->name('userroles');
    Route::post('/kuisisoner', 'KuisionerController@insert')->name('kuisioner');
    

    //Rancangan Pembangunan
    Route::get('/rancangan-pembangunan', function () {
        return view('datahome/rancangan-pembangunan');
    });

    Route::get('/rancangan-pembangunan/{tingkat}', function () {
        return view('datahome/tingkat/rancangan-pembangunan');
    });
    Route::get('/rancangan-pembangunan-dokumen/{tingkat}/{id}', 'RancanganPembangunanController@create')->name('userroles');
    Route::post('/rancangan-pembangunan', 'RancanganPembangunanController@insert')->name('rancangan-pembangunan');

    //Penjaminan Mutu
    Route::get('/penjaminan-mutu', function () {
        return view('datahome/penjaminan-mutu');
    });

    Route::get('/penjaminan-mutu/{tingkat}', function () {
        return view('datahome/tingkat/penjaminan-mutu');
    });

    Route::get('/penjaminan-mutu-dokumen/{tingkat}/{id}', 'PenjaminanMutuController@create')->name('penjaminan-mutu');
    Route::post('/penjaminan-mutu', 'PenjaminanMutuController@insert')->name('penjaminan-mutu');
    
    //Standar Operasional
    Route::get('/standar-operasional', function () {
        return view('datahome/standar-operasional');
    });

    Route::get('/standar-operasional/{tingkat}', function () {
        return view('datahome/tingkat/standar-operasional');
    });

    Route::get('/standar-operasional-dokumen/{tingkat}/{id}', 'StandarOperasionalController@create')->name('standar-operasional');
    Route::post('/standar-operasional', 'StandarOperasionalController@insert')->name('standar-operasional');

    //Pendidikan dan Pelatihan
    Route::get('/pendidikan-pelatihan', function () {
        return view('datahome/pendidikan-pelatihan');
    });

    Route::get('/pendidikan-pelatihan/{tingkat}', function () {
        return view('datahome/tingkat/pendidikan-pelatihan');
    });

    Route::get('/pendidikan-pelatihan-dokumen/{tingkat}/{id}', 'PendidikanPelatihanController@create')->name('pendidikan-pelatihan');
    Route::post('/pendidikan-pelatihan', 'PendidikanPelatihanController@insert')->name('pendidikan-pelatihan');

    //Analisis Kebijakan
    Route::get('/analisis-kebijakan', function () {
        return view('datahome/analisis-kebijakan');
    });

    Route::get('/analisis-kebijakan/{tingkat}', function () {
        return view('datahome/tingkat/analisis-kebijakan');
    });

    Route::get('/analisis-kebijakan-dokumen/{tingkat}/{id}', 'AnalisisKebijakanController@create')->name('analisis-kebijakan');
    Route::post('/analisis-kebijakan', 'AnalisisKebijakanController@insert')->name('analisis-kebijakan');

    //Manajemen Sumber
    Route::get('/manajemen-sumber', function () {
        return view('datahome/manajemen-sumber');
    });

    Route::get('/manajemen-sumber/{tingkat}', function () {
        return view('datahome/tingkat/manajemen-sumber');
    });

    Route::get('/manajemen-sumber-dokumen/{tingkat}/{id}', 'ManajemenSumberController@create')->name('manajemen-sumber');
    Route::post('/manajemen-sumber', 'ManajemenSumberController@insert')->name('manajemen-sumber');

    //Manajemen Resiko
    Route::get('/manajemen-resiko', function () {
        return view('datahome/manajemen-resiko');
    });

    Route::get('/manajemen-resiko/{tingkat}', function () {
        return view('datahome/tingkat/manajemen-resiko');
    });

    Route::get('/manajemen-resiko-dokumen/{tingkat}/{id}', 'ManajemenResikoController@create')->name('manajemen-resiko');
    Route::post('/manajemen-resiko', 'ManajemenResikoController@insert')->name('manajemen-resiko');

    //Pengukuran Kinerja
    Route::get('/pengukuran-kinerja', function () {
        return view('datahome/pengukuran-kinerja');
    });

    Route::get('/pengukuran-kinerja/{tingkat}', function () {
        return view('datahome/tingkat/pengukuran-kinerja');
    });

    Route::get('/pengukuran-kinerja-dokumen/{tingkat}/{id}', 'PengukuranKinerjaController@create')->name('pengukuran-kinerja');
    Route::post('/pengukuran-kinerja', 'PengukuranKinerjaController@insert')->name('pengukuran-kinerja');


    Route::get('/dashboard/{id}', 'UserController@destroy')->name('dashboard.destroy');
    Route::get('/dashboard.show/{id}', 'UserController@show')->name('dashboard.show');

    //SHOW DATA ADMIN
    Route::get('/dokumen.show/kuisioner/{id}', 'DokumenController@kuisioner')->name('dokumen.show');

    Route::get('regis', function(){
        return view('auth/register');
    });

    Route::get('/home', 'HomeController@index')->name('home');
    // Route::middleware('role:admin')->get('/dashboard', 'HomeController@index')->name('dashboard');
    
    Route::middleware('role:admin')->get('/dashboard', 'UserController@kuisione'
    )->name('dashboard');
    
    });
