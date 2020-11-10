<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Autenticacao extends Controller
{
    function userLogin(Request $req){
        return $req->input();
    }
}
