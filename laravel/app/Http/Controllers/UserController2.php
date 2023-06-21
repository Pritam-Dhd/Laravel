<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController2 extends Controller
{
    //
    function loadView(){
        $data=['Pritam','Pritam1','Pritam2'];
        return view('users',["users"=>$data]);
    }
}
