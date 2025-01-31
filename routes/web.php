<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\LoginController;

Route::get('/', function () {
    return view('home');
});

Route::prefix('/backend')->group(function(){
    Route::middleware(['auth:admin'])->group(function () {
        Route::get('/', [BackendController::class, 'index'])->name('backend');
    });
    //Login Routes
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.auth');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
