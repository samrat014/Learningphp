<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\returnSelf;

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

// PASSING A DATA FROM URL and showing it 
// ? is for optional
Route::get('/name/{name}/{surname?}', function($name , $surname = 'developer'){
    return "hello " . $name ." ". $surname;
})->where(['name' => '[A-Za-z]+' , 'id' => '[0-9]+']); // this is for the name to be string only  .can be also done for the numeber.

// view hello with passsing value 
Route::get('hello/{value}', function($value){
    return view('hello',['value' => $value]);
});

