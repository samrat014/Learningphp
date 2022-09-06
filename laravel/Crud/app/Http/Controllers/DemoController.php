<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    
function index(Request $request){

    $request-> validate(['
    email' => 'required',
    'password' => 'required'
]);
    echo "hello from controller form indexfunction";
}

// session lessons
function session_set(Request $r){
    $r->session()->put('name','samrat');

}
function session_get(Request $r){
    echo   $r->session()->get('name' );

}
function session_remove(Request $r){
      $r->session()->forget('name' );

}

// validating the users loging activity 
function userlogin(Request $r){
    
    $request-> validate([
        'email' => 'required',
    'password' => 'required'
]);
  echo   $email = $r-> input('email');
   echo  $password = $r-> input('password');


}


}

