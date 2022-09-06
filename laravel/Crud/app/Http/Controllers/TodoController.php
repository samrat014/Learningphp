<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(todo $todo)
    {
        //
    }

    public function edit(todo $todo)
    {
        //
    }

   
    public function update(Request $request, todo $todo)
    {
        //
    }

    public function destroy(todo $todo,$id)
    {
        todo::destroy(array('id',$id));
           
        print_r("the {{$id}} is deleted");
        return redirect('todo_show');
    }


    public function todo_show(todo $todo)
    {
        //
        return view('showtodo')->with('todoArr',todo::all());
    }

    
}
