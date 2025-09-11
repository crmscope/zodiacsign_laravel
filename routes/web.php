<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZodiacSignController;
use App\Http\Controllers\ZodiacRelationController;
use App\Http\Controllers\ZodiacForecastController;  


Route::get('/', function () {
    return view('welcome');
});


//Route::get('/contracts', [ContractController::class, 'index']);


Route::get('/signs', [ZodiacSignController::class, 'index']);
Route::get('/relations', [ZodiacRelationController::class, 'index']);
Route::get('/forecast', [ZodiacForecastController::class, 'index']);



