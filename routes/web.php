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


Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/post/new', [PostController::class, 'create'])->middleware('auth')->name('newPost');
Route::get('/post/{id}', [PostController::class, 'show'])->name('post');
Route::post('/posts', [PostController::class, 'store'])->middleware('auth');


Route::get('/author/{id}', [AuthorController::class, 'show'])->name('author');

Route::get('/category/{name}', [CategoryController::class, 'show'])->name('category');

Auth::routes();


