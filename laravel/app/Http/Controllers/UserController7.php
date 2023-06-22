<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController7 extends Controller
{
    //
    function userLogin(Request $req)
    {
        $data =$req->input();
        $req->session()->put('username',$data['username']);
        // ❓To put in flash session which is removed after refresh 
        // $req->session()->flash('username',$data['username']);
        return redirect('profile');
    }
}
