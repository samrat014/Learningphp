<?php

namespace App\Http\Controllers;

use App\Models\profile;
use App\Models\User;
use GuzzleHttp\Psr7\Request;

class ProfileController extends Controller
{
   
        public function index($user)
        {
       $user = User::findorfail($user) ;
            return view('index',[
            'user' => '$user',
        ]);
    }

    public function edit(profile $user)
    {
        // $this->authorize('update', $user->profile);
        return view('editProfile',[
            'user' => $user,
        ]);
    }
    
    public function update(profile $user)
    {
            $data = request()->validate([
        'name' =>'',
        'description'=> '',
        'url' => '',
            ]);

            auth()->user()->profile->update($data);

        return redirect('/profile/' .auth()->user()->id);
          
    }
}
