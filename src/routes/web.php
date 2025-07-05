<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ContactController::class, 'index']);
Route::post('/confirm', [ContactController::class, 'confirm']);
Route::get('/thanks', [ContactController::class, 'store']);
Route::get('/admin', [ContactController::class, 'admin']);
Route::get('/search', [ContactController::class, 'search']);
Route::post('/delete', [ContactController::class, 'destroy']);
Route::post('/export', [ContactController::class, 'export']);

Route::middleware('auth')->group(function () {

});

// loginとregisterはFortifyが自動でルーティングしてくれている。