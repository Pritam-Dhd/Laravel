<?php

use Illuminate\Support\Facades\Route;

// Importing Controller
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserController2;
use App\Http\Controllers\UserController3;
use App\Http\Controllers\UserController4;
use App\Http\Controllers\UserController5;
use App\Http\Controllers\UserController6;
use App\Http\Controllers\UserController7;
use App\Http\Controllers\UserController8;
use App\Http\Controllers\Member;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Passing parameter in the Html
Route::get('/hello{name}', function ($name) {
    return view('hello',['name'=>$name]);
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/user/{id}',[UserController::class,'show']);

Route::get('/users',[UserController2::class,'loadView']);

Route::post('/form',[UserController3::class,'getData']);

Route::view('/form','login')->middleware('protectedPage');

Route::get('/noaccess', function () {
    return view('noAccess');
});

// ❓For group middleware
Route::group(['middleware'=>['protectedPage']],function(){
    Route::view('/home','home');
}); 

Route::get('/url',[UserController4::class,'index']);

Route::get('/DB',[UserController5::class,'getData']);

Route::get('/http',[UserController6::class,'index']);

Route::get('/login', function () {
    if(session()->has('username'))
    {
        return redirect('profile');
    }
    return redirect('login');
});

Route::view('/profile','profile');
Route::get('/logout', function () {
    if(session()->has('username'))
    {
        session()->pull('username',null);
    }
    return redirect('login');
});
Route::post('/loginP',[UserController7::class,'userLogin']);

Route::view('/upload','upload');

Route::post('/upload',[UserController8::class,'index']);

Route::get('/students',[UserController5::class,'getData']);

Route::get('delete/{name}',[UserController3::class,'delete']);

Route::get('edit/{name}',[UserController3::class,'showData']);

Route::post('edit',[UserController3::class,'update']);

Route::get('list',[Member::class,'operations']);