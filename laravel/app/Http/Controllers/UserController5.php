<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//❓To use the model
use App\Models\User; 

class UserController5 extends Controller
{
    //
    function getData()
    {
        // $data=User::all();
        // ❓To use pagination
        $data=User::paginate(5);
        return view('students',['students'=>$data]);
    }
}
