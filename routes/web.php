<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\Maincontroller::class, 'index']);
#Route::get('/', function () {return view('welcome');});
