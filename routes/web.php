<?php

use App\Http\Controllers\PostController;
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


// Site Routes
// Route Home
Route::get('/', function () {
    return view('home');
})->name('home');

// Route Posts
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

// Route Single Post
Route::get('/post/{post:slug}', [PostController::class, 'show'])->name('posts.show');

// Route Categories
Route::get('/categories', function () {
    return view('categories');
})->name('categories');

// Route About
Route::get('/about', function () {
    return view('about');
})->name('about');



// Dashboard Routes
// Route Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route Dashboard Posts
Route::get(
    '/dashboard/posts',
    function () {
        return view('dashboard.posts.index');
    }
)->middleware(['auth', 'verified'])->name('dashboard.posts.index');

// Route Dashboard Categories
Route::get(
    '/dashboard/categories',
    function () {
        return view('dashboard.categories.index');
    }
)->middleware(['auth', 'verified'])->name('dashboard.categories.index');

require __DIR__ . '/auth.php';
