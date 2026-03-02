<?php

use App\Http\Controllers\HallController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage', ['title' => 'Homepage']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'idAdmin']);

Route::get('/hall', [HallController::class, 'index']);
Route::get('/hall/book/{book:slug}', [HallController::class, 'GetByBook']);
Route::get('/hall/author/{author:slug}', [HallController::class, 'GetByAuthor']);
Route::get('/hall/category/{category:slug}', [HallController::class, 'GetByCategory']);

Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [LoginController::class, 'register']);
Route::post('/register', [LoginController::class, 'store']);

Route::post('/logout', [LoginController::class, 'logout']);