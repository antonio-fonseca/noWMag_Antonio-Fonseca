<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PublicController::class, 'home'])->name('home');

// ROUTES per CRUD

// CREATE - create e store
Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
Route::post('/articles/store', [ArticleController::class, 'store'])->name('articles.store');

// READ - index e show
Route::get('/articles/index', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/article/info/{article}', [ArticleController::class, 'show'])->name('articles.show');

// UPDATE - edit e update
Route::get('/articles/edit/{article}', [ArticleController::class, 'edit'])->name('articles.edit');
Route::put('/articles/update/{article}', [ArticleController::class, 'update'])->name('articles.update');

// DESTROY - delete
Route::delete('/article/delete/{article}', [ArticleController::class, 'destroy'])->name('articles.delete');
