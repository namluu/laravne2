<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\CategoryController;

Route::get('/', function () {
    return view('home');
});

Route::prefix('/backend')->group(function(){
    Route::middleware(['auth:admin'])->group(function () {
        Route::get('/', [BackendController::class, 'index'])->name('backend');

        // CMS
        Route::get('/cms/categories', [CategoryController::class, 'index'])->name('backend.category.index');
        Route::get('/cms/categories/create', [CategoryController::class, 'create'])->name('backend.category.create');
        Route::post('/cms/categories', [CategoryController::class, 'store'])->name('backend.category.store');
    });

    // Login Routes
    Route::get('/login', [LoginController::class, 'show'])->name('login');
    Route::post('/login', [LoginController::class, 'auth'])->name('login.auth');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
