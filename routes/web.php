<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [HomePageController::class, 'index']);


