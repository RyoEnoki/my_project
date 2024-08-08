<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\Maincontroller::class, 'index']);
Route::get('/login', [App\Http\Controllers\Logincontroller::class, 'login']);
Route::get('/regist', [App\Http\Controllers\Maincontroller::class, 'regist']);
Route::post('/signin', [App\Http\Controllers\LoginController::class, 'signin']);
Route::post('/register', [App\Http\Controllers\Logincontroller::class, 'register']);
Route::get('/unregister', [App\Http\Controllers\Logincontroller::class, 'unregister']);
Route::get('/loginpage', [App\Http\Controllers\Maincontroller::class, 'login']);
Route::get('/postlist', [App\Http\Controllers\Itemcontroller::class, 'posts'])->name('post.list');
Route::get('/post', [App\Http\Controllers\Maincontroller::class, 'post']);
Route::post('/postup', [App\Http\Controllers\Postcontroller::class, 'postup']);
Route::get('/post/{id}', [App\Http\Controllers\ItemController::class, 'show'])->name('post.show');
#削除用
Route::delete('/destroy{id}', [App\Http\Controllers\DestroyController::class, 'destroy'])->name('post.destroy');

#Route::get('/', function () {return view('welcome');});

