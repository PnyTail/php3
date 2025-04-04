<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TinController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/danhsach', [TinController::class, 'index'])->name('tin.danhsach');
Route::get('/danhsach', [TinController::class, 'index'])->name('danhsach');
Route::get('/tin/them', [TinController::class, 'create']);
Route::post('/tin/them', [TinController::class, 'store']);

Route::get('/tin/xoa/{id}', [TinController::class, 'xoa'])->name('tin.xoa');

Route::get('/tin/sua/{id}', [TinController::class, 'sua'])->name('tin.sua');
Route::post('/tin/sua/{id}', [TinController::class, 'capnhat'])->name('tin.capnhat');
