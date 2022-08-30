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

    Route::view('/','welcome');


    Route::view('page','page');

    // Route::get('/web', function() {

    //     return view('web' ,array('name'=> 'samrat'));
    //     });

 Route::view('news1' , 'news1') -> middleware('usercheck') ;
 Route::view('news2' , 'news2') -> middleware('usercheck');  

 Route::view('denied','denied');
