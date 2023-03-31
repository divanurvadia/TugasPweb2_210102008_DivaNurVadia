<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KegiatanController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');




Route::group(['middleware' => ['auth', 'ceklevel:1,2']], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // });
    Route::get('/daftar-kegiatan', [KegiatanController::class, 'kegiatan'])->name('kegiatan');
    Route::get('/tambah-kegiatan', [KegiatanController::class, 'create'])->name('createkegiatan');
    Route::post('/insert-kegiatan', [KegiatanController::class, 'insert'])->name('insertkegiatan');
    Route::get('/edit-kegiatan/{id}', [KegiatanController::class, 'edit'])->name('editkegiatan');
    Route::post('/update-kegiatan/{id}', [KegiatanController::class, 'update'])->name('updatekegiatan');
    Route::get('/delete-kegiatan/{id}', [KegiatanController::class, 'delete'])->name('deletekegiatan');
});
