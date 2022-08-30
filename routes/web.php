<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\RootController::class, 'index'])->name('index');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/posts/{user}', [App\Http\Controllers\PostsController::class, 'posts'])->name('Posts');
Route::get('/createpost', [App\Http\Controllers\PostsController::class, 'createposts'])->name('newPosts');
Route::post('/savepost', [App\Http\Controllers\PostsController::class, 'savepost'])->name('savepost');
Route::get('/profile/{user}', [App\Http\Controllers\ProfileController::class, 'profile'])->name('profile');
Route::get('/p/edit', [App\Http\Controllers\ProfileController::class, 'profileEdit'])->name('editProfile');
Route::post('/prof/save', [App\Http\Controllers\ProfileController::class, 'profileSave'])->name('saveProfile');





