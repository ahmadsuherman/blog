<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/about', function () {
    return view('about',[
        "name"      => "Ahmad Suherman",
        "email"     => "ahmad.223040066@mail.unpas.ac.id",
        "image"     =>  "ahmad.jpeg"
    ]);
});

Route::get('/blog', function () {
    return view('posts');
});
