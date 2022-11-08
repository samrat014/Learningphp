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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/profile/{user}', [App\Http\Controllers\ProfileController::class, 'index'])->name('index');


Route::get('/upload', [
    App\Http\Controllers\postController::class, 'create'
]);
Route::post('/up', [App\Http\Controllers\postController::class, 'store']);

Route::get('/show/{post}', [App\Http\Controllers\postController::class, 'show']);

