<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Connecting to the database
use Illuminate\Support\Facades\DB;

class UserController4 extends Controller
{
    //
    function index()
    {
        return DB::select('select * from users');
    }
}
