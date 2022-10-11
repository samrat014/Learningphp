<?php

namespace App\Http\Controllers;

use App\Models\profile;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($user)
    {
      $user = profile::find($user) ;
    // dd($user);
        return view('home' , [
            'user' => $user,
        ]);
    }
}
