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

Route :: get('/home', function(){
 echo "This is my home page";
});

Route::get('/', function () {
    return view('demo');
});


Route:: get('/{name?}' , function($name = null){

    $text = "<h1>Hello Naveed</h1>";
//    $data = compact('name' , 'text');

   return view('demo') -> with('$data');

});
Route:: get('/{name?}' , function($name = null){

    $text = "<h1>Hello Naveed</h1>";
//    $data = compact('name' , 'text');

   return view('demo') -> with('$data');

});

