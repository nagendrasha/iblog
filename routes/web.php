<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;



// Admin Routes

Route::group(['middleware' => 'web'], function () {
    // Route::get('/',[HomeController::class,'index']);
    Route::get('/sidebar', [UserController::class, 'admin.sidebar']);
    
    
    
});

// Route::get('/dashboard', [UserController::class, 'dashboard']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/',[HomeController::class,'index']);
Route::get('/login', function () {
    return view('admin.login');
});
Route::get('/dashboard', [UserController::class, 'dashboard']);
Route::post('/login', [UserController::class, 'login']);

// Blogs Routes

Route::get('/',[PostController::class , 'showpost']);
Route::group(['prefix'=>'post'],function(){
    Route::get('all_post',[PostController::class,'all_post'])->name('post.all_post');
    Route::get('/add_post',[PostController::class, 'show_postview'])->name('post.add_post');
    Route::post('/add_post',[PostController::class, 'add_post'])->name('post.add_post');
});

