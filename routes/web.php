<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('droppage');
});

Route::get('login', function () {
    return view('login');
});

Route::get('regis', function () {
    return view('regis');
});

Route::get('utama', function () {
    return view('utama');
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/regis', [RegisterController::class, 'index']);
Route::post('/regis', [RegisterController::class, 'store']);

Route::resource('/utama', DashboardController::class);

Route::put('/utama/profile/{id}', [DashboardController::class, 'update']);
Route::put('/utama/expr-edit/{id}', [DashboardController::class, 'update2']);
Route::put('/utama/cert-edit/{id}', [DashboardController::class, 'update3']);
Route::put('/utama/wrkexpr-edit/{id}', [DashboardController::class, 'update4']);
Route::put('/utama/skl-edit/{id}', [DashboardController::class, 'update5']);

Route::post('/utama/expr-add', [DashboardController::class, 'store']);
Route::post('/utama/cert-add', [DashboardController::class, 'store2']);
Route::post('/utama/wrkexpr-add', [DashboardController::class, 'store3']);
Route::post('/utama/skl-add', [DashboardController::class, 'store4']);

Route::delete('/utama/expr-del/{id}', [DashboardController::class, 'destroy']);
Route::delete('/utama/cert-del/{id}', [DashboardController::class, 'destroy2']);
Route::delete('/utama/wrkexpr-del/{id}', [DashboardController::class, 'destroy3']);
Route::delete('/utama/skl-del/{id}', [DashboardController::class, 'destroy4']);

