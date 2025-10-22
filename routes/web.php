<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    $post=Post::findOrFail(request('id'));
});

Route::get('/posts',[PostController::class,'index']);

Route::get('/posts/create',[PostController::class,'create'])->middleware('auth');

Route::post('/posts',[PostController::class,'store'])->middleware('auth');


Route::get('/posts/{id}',[PostController::class,'show']);

Route::get('/register',[AuthController::class,'showRegister']);
Route::post('/register',[AuthController::class,'storeUser']);

Route::get('/login',[AuthController::class,'showLogin'])->name('login');
Route::post('/login',[AuthController::class,'login']);
Route::get('/logout',[AuthController::class,'logout']);

