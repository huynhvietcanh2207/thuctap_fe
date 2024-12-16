<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NhomDoiTuongController;
use App\Http\Controllers\NghiepVuController;
use App\Http\Controllers\ThietLapController;
use App\Http\Controllers\BaoCaoController;

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

Route::get('/', function () {
    return view('thietlap');
});
 
Route::resource('nhomdoituong', NhomDoiTuongController::class);
Route::resource('/nghiepvu', NghiepVuController::class);
Route::resource('/thietlap', ThietLapController::class);
Route::resource('/baocao', BaoCaoController::class);
