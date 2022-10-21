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


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/posts', function () {
    return view('posts');
})->name('posts');

Route::get('/categories', function () {
    return view('categories');
})->name('categories');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard/posts', function () {
    return view('dashboard.posts.index');
})->middleware(['auth', 'verified'])->name('dashboard.posts.index');

Route::get('/dashboard/categories', function () {
    return view('dashboard.categories.index');
})->middleware(['auth', 'verified'])->name('dashboard.categories.index');

require __DIR__ . '/auth.php';
