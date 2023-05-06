<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatatanSiswaController;
use App\Http\Controllers\Siswa\PelanggaranSiswaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PengumumanController;




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

Route::group(['middleware' => ['auth']], function(){
    Route::group(['middleware' => ['role:admin']], function(){
        Route::resource('pelanggaran', PelanggaranSiswaController::class);
    });
});

Route::resource('catatan', CatatanSiswaController::class);
Route::resource('pelanggaran', PelanggaranSiswaController::class);
Route::resource('pengumuman', PengumumanController::class);

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('aksilogin', [LoginController::class, 'aksilogin'])->name('aksilogin');

// Route::get('dashboard', [DashController::class, 'index'])->name('index');
Route::post('aksilogout', [LoginController::class, 'aksilogout'])->name('aksilogout');

Route::get('reg', [RegisterController::class, 'index'])->name('index');
Route::post('aksireg', [RegisterController::class, 'inputreg'])->name('aksireg');
