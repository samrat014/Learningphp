<?php

namespace App\Http\Controllers;
use App\Models\post;
use Illuminate\Http\Request;

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
auth()->user()->posts()->create($data);
    }

    public function show($id)
    {
        post::find($id);
        
        return view('showUser',['id' => $id]);
    }
}
