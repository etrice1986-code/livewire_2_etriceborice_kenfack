<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

//ArticleController

//CREATE
Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');

// Index
Route::get('/articles/index', [ArticleController::class, 'index'])->name('articles.index');

// Show
Route::get('/articles/{article}/show', [ArticleController::class, 'show'])->name('articles.show');

//edit
Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
