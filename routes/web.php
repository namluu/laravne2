<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ArticleController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/article/{article:url}', [HomeController::class, 'showArticle'])->name('article');
Route::get('/category/{category:url}', [HomeController::class, 'showCategory'])->name('category');

Route::prefix('/backend')->group(function(){
    Route::middleware(['auth:admin'])->group(function () {
        Route::get('/', [BackendController::class, 'index'])->name('backend');

        // CMS - Category
        Route::get('/cms/categories', [CategoryController::class, 'index'])->name('backend.category.index');
        Route::get('/cms/categories/create', [CategoryController::class, 'create'])->name('backend.category.create');
        Route::post('/cms/categories', [CategoryController::class, 'store'])->name('backend.category.store');
        Route::get('/cms/categories/edit/{id}', [CategoryController::class, 'edit'])->name('backend.category.edit');
        Route::put('/cms/categories/{id}', [CategoryController::class, 'update'])->name('backend.category.update');
        Route::delete('/cms/categories/{id}', [CategoryController::class, 'destroy'])->name('backend.category.destroy');

        // CMS - Article
        Route::get('/cms/articles', [ArticleController::class, 'index'])->name('backend.article.index');
        Route::get('/cms/articles/create', [ArticleController::class, 'create'])->name('backend.article.create');
        Route::post('/cms/articles', [ArticleController::class, 'store'])->name('backend.article.store');
        Route::get('/cms/articles/edit/{id}', [ArticleController::class, 'edit'])->name('backend.article.edit');
        Route::put('/cms/articles/{id}', [ArticleController::class, 'update'])->name('backend.article.update');
        Route::delete('/cms/articles/{id}', [ArticleController::class, 'destroy'])->name('backend.article.destroy');
    });

    // Login Routes
    Route::get('/login', [LoginController::class, 'show'])->name('login');
    Route::post('/login', [LoginController::class, 'auth'])->name('login.auth');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
