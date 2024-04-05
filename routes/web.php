<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Posts;

Route::get('/', function(){
    $posts = Posts::all();
    return view('register', ['posts' => $posts]);
});

Route::get('/', [UserController::class, 'registerView']);

Route::post('register', [UserController::class, 'register']);

Route::post('logout',[UserController::class, 'logout']);

Route::post('login',[UserController::class, 'login']);

Route::post('post', [PostController::class, 'createPost']);
