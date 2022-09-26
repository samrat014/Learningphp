<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\Userprofile;
use App\Http\Controllers\DB_test;
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

    //     return view('web');
    //     });

 Route::view('news1' , 'news1') -> middleware('usercheck') ;
 Route::view('news2' , 'news2') -> middleware('usercheck');  

 Route::view('denied','denied');
 
//  Route::group(['middleware'=>['usercheck']])
 

//  Route::view('profile', function () {
    
    // })->middleware('usercheck');
    
    
    Route::get('firstView',[DemoController::class, 'index']);
    
    
    Route::get('session_set',[DemoController::class, 'session_set']);
    Route::get('session_get',[DemoController::class, 'session_get']);
    Route::get('session_remove',[DemoController::class, 'session_remove']);

    Route::view('login','login');
    route::post('userlogin',[DemoController::class, 'userlogin']);
    
    // select data from data base using controller function
    route::get('select',[DB_test::class, 'select']);
    //insert into database
    route::get('insert',[DB_test::class, 'insert']);
    //update the database
    route::get('update',[DB_test::class, 'update']);
    // delete the database
    route::get('delete',[DB_test::class, 'delete']);
    
    
    route::get('getdata',[Userprofile::class, 'get_data']);



    route::get('addtodo',[TodoController::class, 'create']);
    route::post('todo_submit',[TodoController::class, 'store']);
    route::get('todo_show',[TodoController::class, 'todo_show']);
    route::get('todo_delete/{id}',[TodoController::class, 'destroy']);
