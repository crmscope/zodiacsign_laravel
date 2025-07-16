<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;

use App\Http\Controllers\SignScoreScoreController;
use App\Http\Controllers\RelationshipsScoreController;
use App\Http\Controllers\Account\LoginController;
use App\Http\Controllers\Account\RegistrationController;
use App\Http\Controllers\Account\SettingsController;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [HomePageController::class, 'index']);
Route::get('/sign', [SignScoreScoreController::class, 'index']);
Route::get('/relationships', [RelationshipsScoreController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/registration', [RegistrationController::class, 'index']);
Route::get('/settings', [SettingsController::class, 'index']);


