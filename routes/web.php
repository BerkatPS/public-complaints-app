<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\admin;
use App\Http\Controllers\DashboardController;
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

// Route From PengaduanController
Route::get('/', [PengaduanController::class,'index'])->name('login');
Route::get('/aspirasi', [PengaduanController::class,'aspirasi'])->name('aspirasi');
Route::post('/storeaspirasi', [PengaduanController::class,'storeaspirasi']);

Route::post('/feedback', [PengaduanController::class,'feedback'])->name('feedback');

Route::post('/authenticate', [PengaduanController::class,'authenticate']);
Route::get('/logout', [PengaduanController::class,'logout']);


// Route From AdminController
Route::get('/admin', [AdminController::class , 'index']);















