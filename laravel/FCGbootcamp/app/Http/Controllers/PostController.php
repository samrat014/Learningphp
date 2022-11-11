<?php

namespace App\Http\Controllers;
use App\Models\post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'caption' => 'required',
            'image' => 'required',
        ]);

        
        
        $imagePath = request('image')->store('upload','public');
        // resize the image
        // $imageResize = Image::make(public_path("/storage/{{$imagePath}}"))->fit(1200,1200);
        // $imageResize->save();

        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath,
        ]);

       return redirect('/profile/' .auth()->user()->id);
}

    // public function show( post $id)
    // {
    //     dd($id);
    //     $user = User::findorfail($id) ;
        
    //     return view('showUser',[
    //         'id' => $id
    //     ]);        
    // }
}
