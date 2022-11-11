<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Auth::routes();
// view the profile
Route::get('/home', function(){
    return view('welcome');
});
Route::get('/profile/{user}', [App\Http\Controllers\ProfileController::class, 'index'])->name('index');

//upload an image
Route::get('/upload', [App\Http\Controllers\postController::class, 'create']);
Route::post('/up', [App\Http\Controllers\postController::class, 'store']);

// show user by id 
Route::get('/show/{post}', [App\Http\Controllers\ProfileController::class, 'show']);

