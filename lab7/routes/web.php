<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\HsController;

Route::get('/hs', [HsController::class, 'hs']);
Route::post('/hs', [HsController::class, 'hs_store']);

use App\Http\Controllers\SvController;

Route::get('/sv', [SvController::class, 'sv']);
Route::post('/sv', [SvController::class, 'sv_store'])->name('sv.store');

use Illuminate\Support\Facades\Mail;
use App\Mail\GuiMail;

Route::get('/guimail', function () {
    Mail::send(new GuiMail);
    return 'Đã gửi mail!';
});
