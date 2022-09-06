<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class TodoController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        return view('addtodo');
    }
    
    public function todo_show(todo $todo)
        {
            //
            return view('showtodo')->with('todoArr',todo::all());
        }

    public function store(Request $request)
    {
        $request->validate([  
            'name'=>'required',  
            'note'=>'required'  
        ]);  

        $val = new todo;
        $val->name=$request->input('name');
        $val->note=$request->input('note');
           $val->save();

          return redirect('todo_show');
        
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


    
}
