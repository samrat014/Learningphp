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
Route::get('/profile/{user}', [App\Http\Controllers\ProfileController::class, 'index']);

//upload an image
Route::get('/upload', [App\Http\Controllers\postController::class, 'create']);
Route::post('/up', [App\Http\Controllers\postController::class, 'store']);
Route::get('/p/{post}', [App\Http\Controllers\postController::class, 'show']);
Route::get('/edit', [App\Http\Controllers\ProfileController::class, 'edit']);

//post controller
Route::get('/delete/{$post}', [App\Http\Controllers\PostController::class, 'delete']);
