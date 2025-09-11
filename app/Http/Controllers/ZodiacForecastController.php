<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZodiacForecastController extends Controller
{
    public function index()
    {
        // Logic to generate and return the zodiac forecast
        //return view('forecast.index');
        return "Forecast";
    }
}
