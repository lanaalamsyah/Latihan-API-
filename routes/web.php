<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\UserController;

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
    return view('home');
});

 
Route::get('/login', [LoginController::class,'halamanlogin'])->name('login');
Route::post('/postlogin', [LoginController::class,'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');

route::group(['midleware'=>['auth']], function ()
{
    Route::get('/home', [HomeController::class,'index'])->name('home');
});

Route::resource('users', UserController::class);

Route::get('/data-pegawai', [PegawaiController::class,'index'])->name('data-pegawai');
Route::get('/create-data-pegawai', [PegawaiController::class,'create'])->name('create-data-pegawai');
Route::post('/simpan-data-pegawai', [PegawaiController::class,'store'])->name('simpan-data-pegawai');
// Route::get('/edit-data-pegawai/{id}', [PegawaiController::class,'edit'])->name('edit-data-pegawai');
Route::match(['get', 'post'],'/{id}/edit-data-pegawai',[ PegawaiController::class, 'edit' ])->name('edit-data-pegawai');
Route::post('/update-data-pegawai/{id}',[ PegawaiController::class,'update'])->name('update-data-pegawai');
Route::match(['get', 'post'],'/{id}/delete-data-pegawai',[ PegawaiController::class, 'destroy' ])->name('delete-data-pegawai');
// Route::get('/delete-data-pegawai/{id}',[ PegawaiController::class,'destroy'])->name('delete-data-pegawai');
