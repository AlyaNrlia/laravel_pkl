<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes(
    [
        'register' => true
    ]
);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//hanya untuk role admin
 Route::group(['prefix' => 'admin', 'middleware' => ['auth','role:admin']], function(){
     Route::get('/', function(){
         return 'halaman admin';
     });

     Route::get('profile', function(){
         return 'halaman profile admin';
     });
 });

 //hanya untuk role pengguna
 Route::group(['prefix' => 'pengguna', 'middleware' => ['auth','role:pengguna']], function(){
     Route::get('/', function(){
         return 'halaman pengguna';
     });
    
     Route::get('profile', function(){
         return 'halaman profile pengguna';
     });
 });

 Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){
    Route::get('beranda', function(){
        return view('beranda.index');
    })->middleware(['role:admin|pengguna']);
   
    Route::get('Data Suplier', function(){
        return view('Data suplier.index');
    })->middleware(['role:admin|pengguna']);

    Route::get('Daftar Barang', function(){
        return view('Daftar barang.index');
    })->middleware(['role:admin|pengguna']);

    Route::get('Laporan Barang Masuk', function(){
        return view('Laporan Barang Masuk.index');
    })->middleware(['role:admin']);

    Route::get('Laporan Barang Keluar', function(){
        return view('Laporan Barang Keluar.index');
    })->middleware(['role:admin']);
});