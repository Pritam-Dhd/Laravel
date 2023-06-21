<?php

use Illuminate\Support\Facades\Route;

// Importing Controller
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserController2;
use App\Http\Controllers\UserController3;
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