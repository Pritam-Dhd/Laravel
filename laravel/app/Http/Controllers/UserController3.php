<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// ❓use database table
use App\Models\User;
class UserController3 extends Controller
{
    //
    function getData(Request $req)
    {
        $students=new User;
        $students->name=$req->name;
        $students->age=$req->age;
        $students->save();
        echo("Data added successfully");
    }
    function delete($name)
    {
        // ❓To delete the data using id
        // $data=User::find($name);
        // $data->delete();

        // ❓To delete the data using name
        User::where('name', $name)->delete();

        echo("Data deleted successfully");
    }
    function showData($name)
    {
        $data= User::where('name', $name)->get();
        echo $data;
        return view('edit',['data'=>$data]);
    }
    function update(Request $req)
    {
        $affectedRows = User::where('name', $req->name)
                        ->update(['age' => $req->age]);
    
        if ($affectedRows > 0) {
            echo("Data updated successfully");
        } else {
            echo("User not found");
        }
    }
}
