<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [PagesController::class, 'index']);
Route::post('/blog/{slug}/comment', [PostsController::class, 'comment']);
Route::delete('/blog/{comment_id}/commentdelete', [PostsController::class, 'commentDelete']);
Route::post('/blog/{id}/save', [PostsController::class, 'save']);
Route::get('/profile/{id}/edit', [ProfileController::class, 'edit']);
Route::get('/profile/{id}/following', [ProfileController::class, 'following']);
Route::post('/profile/{id}/follow', [ProfileController::class, 'follow']);
Route::post('/profile/{id}/unfollow', [ProfileController::class, 'unfollow']);
Route::get('/followed/{id}', [PagesController::class, 'followed']);
Route::get('/saved/{id}', [PagesController::class, 'saved']);
Route::put('/profile/{id}', [ProfileController::class, 'update']);
Route::get('/profile/{id}', [PagesController::class, 'profile']);
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::resource('/blog', PostsController::class);

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/admin', [PagesController::class, 'admin']);