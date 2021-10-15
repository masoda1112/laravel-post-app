<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

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

Route::get('/', [PostController::class, 'index']);

Route::get('/post/{post}', [PostController::class, 'show'])->name('show');

Route::get('/post/{post}/edit', [PostController::class, 'edit'])->name('edit');

Route::patch('/post/{post}/update', [PostController::class, 'update'])->name('update');

Route::get('/add', [PostController::class, 'add']);

Route::post('/store', [PostController::class, 'store'])->name('store');

Route::delete('/post/{post}/destroy', [PostController::class, 'destroy'])->name('destroy');

Route::post('/post/{post}/comments', [CommentController::class, 'store'])->name('commentstore');
