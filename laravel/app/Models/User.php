<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    // ❓To show other tables data
    public $table = "students";


    // ❓To remove the timestamps
    public $timestamps = false;
}
