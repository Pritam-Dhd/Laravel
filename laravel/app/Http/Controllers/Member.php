<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Member extends Controller
{
    //
    function operations()
    {
        // ❓Where clause
        // return DB::table('students')
        // ->where('name','Pritam')
        // ->get();

        // ❓To find using id
        // return (array) DB::table('students')
        // ->find(4);

        // ❓To insert
        // return DB::table('students')
        // ->insert(['name'=>'Pritam9','email'=>'pritam9@gmail.com']);
        
        //  ❓To update
        // return DB::table('students')
        // ->where('name','Pritam')
        // ->update(['name'=>'Pritam1']); 

        // ❓To delete
        // return DB::table('students')
        // ->where('name','Pritam1')
        // ->delete();

        // ❓To join 2 tables
        return DB::table('students')
        ->join('users','students.name','=','users.name')
        ->get();
    }
}
