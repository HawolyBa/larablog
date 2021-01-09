<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/posts', [PostController::class, 'index']);
Route::get('/post/new', [PostController::class, 'create'])->middleware('auth');
Route::get('/post/{id}', [PostController::class, 'show']);
Route::post('/posts', [PostController::class, 'store'])->middleware('auth');


Route::get('/author/{id}', [AuthorController::class, 'show']);

Route::get('/category/{id}', [CategoryController::class, 'show']);



Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
