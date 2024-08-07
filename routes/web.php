<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\Maincontroller::class, 'index']);
Route::get('/login', [App\Http\Controllers\Logincontroller::class, 'login']);
Route::get('/regist', [App\Http\Controllers\Maincontroller::class, 'regist']);
Route::post('/signin', [App\Http\Controllers\LoginController::class, 'signin']);
Route::post('/register', [App\Http\Controllers\Logincontroller::class, 'register']);
Route::get('/unregister', [App\Http\Controllers\Logincontroller::class, 'unregister']);
Route::get('/loginpage', [App\Http\Controllers\Maincontroller::class, 'login']);
Route::get('/postlist', [App\Http\Controllers\Maincontroller::class, 'postlist']);
Route::get('/post', [App\Http\Controllers\Maincontroller::class, 'post']);
Route::post('/postup', [App\Http\Controllers\Postcontroller::class, 'postup']);
Route::get('/', [App\Http\Controllers\Itemcontroller::class, 'index']);
Route::get('/login', [App\Http\Controllers\Itemcontroller::class, 'index']);
Route::get('/postlist', [App\Http\Controllers\Itemcontroller::class, 'posts']);
Route::get('/post/{id}', [App\Http\Controllers\ItemController::class, 'show'])->name('post.show');
#Route::get('/', function () {return view('welcome');});

