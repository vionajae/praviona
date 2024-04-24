<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\KasirController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', function () {
    return view('dashboard');
});


Route::get('login',[AdminController::class,'adminlogin']);
Route::post('login',[AdminController::class,'cekadminlogin']);
Route::post('idk',[AdminController::class,'cekadminlogin']);

Route::get('tambahadmin',[KasirController::class,'tambahadmin']);
Route::post('tambahadmin',[KasirController::class,'cektambahadmin']);
Route::get('dataadmin',[KasirController::class,'dataadmin']);
Route::post('dataadmin',[KasirController::class,'cekdataadmin']);

Route::get('tambahbuku',[AdminController::class,'tambahbuku']);
Route::post('tambahbuku',[AdminController::class,'cektambahbuku']);
Route::get('databuku',[AdminController::class,'databuku']);
Route::post('databuku',[AdminController::class,'cekdatabuku']);
Route::get('editbuku/{id}',[AdminController::class,'editbuku']);
Route::post('editbuku/{id}',[AdminController::class,'updatebuku']);
Route::get('hapusbuku/{id}',[AdminController::class,'hapusbuku']);