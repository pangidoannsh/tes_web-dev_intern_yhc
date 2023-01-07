<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\UserController;
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

Route::get('/login', [UserController::class, 'index'])->name('login');
Route::post('/login', [UserController::class, 'login']);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', [MahasiswaController::class, 'index']);
    Route::get('/mahasiswa/{nim}', [MahasiswaController::class, 'show']);
    Route::post('/mahasiswa', [MahasiswaController::class, 'store']);
    Route::post('/mahasiswa/{id}/update', [MahasiswaController::class, 'update']);
    Route::post('/mahasiswa/{id}/delete', [MahasiswaController::class, 'destroy']);

    Route::get('/prodi', [ProdiController::class, 'index']);
    Route::post('/prodi', [ProdiController::class, 'store']);
});
