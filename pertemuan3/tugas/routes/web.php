<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ["title" => "Home"]);
});

Route::get('/about', function () {
    return view('about', ["title" => "About"]);
});

Route::get('/blog', function () {
    return view('blog', ["title" => "Blog"]);
});

Route::get('/contact', function () {
    return view('contact', ["title" => "Contact"]);
});

// Route untuk CategoryController
Route::get('/categories', [CategoryController::class, 'index']) ->name('categories.index');

// Route untuk memanggil method di PostController
Route::get('/posts', [PostController::class, 'index']) ->name('posts.index');
