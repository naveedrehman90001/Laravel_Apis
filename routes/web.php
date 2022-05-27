<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo', function () {
    echo "Hello Demo View ";
});

Route:: get('/MyPage/{name}/{id?}' , function($name , $id = null){

    echo "This is My First page Rout";
    echo $name;
    echo $id;
});

Route :: get('/Home' , function(){
    echo "Hi this is naveed";
});