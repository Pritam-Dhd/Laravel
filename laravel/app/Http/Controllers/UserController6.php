<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// To use http
use Illuminate\Support\Facades\Http;

class UserController6 extends Controller
{
    //
    function index()
    {
        $data =Http::get("https://reqres.in/api/users?page=1");
        return view('http',['collection'=>$data['data']]);
    }
}
