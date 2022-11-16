@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
    <div class="col-5">
        edit
        
        <div class=" p-3">
            <input class="file p-2" type="text" value="{{Auth::user()->name}}"><br>
            <input class="file p-2" type="text" value="{{Auth::user()->profile->description}}">
            </div>  

            <button>
                submit
            </button>
            
        </div>


    </div>
</div>

@endsection