<?php

use App\Http\Controllers\MahasiswaController;
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


Route::get('/test',function(){
    return 'test view';
});


Route::get('/hello', function () {
    return 'Helloo wordl.';
});


Route::get('/mahasiswa/getdata',[ MahasiswaController::class, 'getData' ]);
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);