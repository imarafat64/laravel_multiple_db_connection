<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('create/post', [TestController::class, 'CreatePost']);
Route::get('create/product', [TestController::class, 'CreateProduct']);
