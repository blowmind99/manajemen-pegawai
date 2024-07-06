<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PegawaiController;
use App\Models\Pegawai;
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

Route::group(['middleware' => 'guest'], function(){
    Route::get('/', [AuthController::class, 'index']);
    Route::get('/home', [AuthController::class, 'index']);
    Route::post('/loginpost', [AuthController::class, 'login']);
});

Route::group(['middleware' => 'auth'], function (){
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::get('/dashboard/show/{id}', [DashboardController::class, 'show']);
    Route::get('/dashboard/edit/{id}', [DashboardController::class, 'edit']);
    Route::get('/dashboard/add-pegawai', [PegawaiController::class, 'create']);
    
    // Crud Pegawai
    Route::post('/add/pegawai', [PegawaiController::class, 'store']);
    Route::post('/edit/pegawai/{id}', [PegawaiController::class, 'update']);
    Route::post('delete/pegawai/{id}', [PegawaiController::class, 'destroy']);
    // End Crud Pegawai
});
