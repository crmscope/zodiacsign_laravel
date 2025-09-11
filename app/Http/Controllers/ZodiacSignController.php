<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZodiacSignController extends Controller
{
    //
    public function index(Request $request)
    {
        //return view('signs.index', ['sign' => $sign]);
        return view("echo");
    }
}
