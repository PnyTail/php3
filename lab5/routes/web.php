<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuanTriTinController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/download', function () {
    return view('download');
})->middleware('auth');

Route::get('/quantritin', [QuanTriTinController::class, 'index']);

Route::get('/quantri', function () {
    return view('quantri');
})->middleware(['auth', 'quantri']); // Bảo vệ bằng 2 middleware

Route::get('/thongbao', function () {
    return "<h3>Bạn không có quyền truy cập trang này!</h3>";
});

Route::get('/dl', function () {
    return view('download');
})->middleware('auth.basic');
