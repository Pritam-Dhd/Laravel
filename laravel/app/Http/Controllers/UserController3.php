<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController3 extends Controller
{
    //
    function getData(Request $req)
    {
        return $req->input();
    }
}
