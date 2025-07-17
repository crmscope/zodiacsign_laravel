<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {


        //$rez = Account::all();

        $rez = [(object)['id'=>'ok1']];
        //dd($rez);
        return view('login', ['rez'=> $rez]);
    }
}
