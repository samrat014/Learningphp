@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
    <div class="col-5">
        <form action="/profile/{{ $user->id }}" method="post"> 
            @csrf
            @method('PATCH')

            edit profile
        <div class=" p-3">
            name<br>
            <input class="file p-2" type="text" name = "name" value="{{Auth::user()->name ?? 'enter name' }}"><br>
            description<br>
            <input class="file p-2" type="text" value="{{Auth::user()->profile->description ?? 'enter description' }}">
            </div>  

            
            <button>
                save 
            </button>
        </div>
    </form>

    </div>
</div>

@endsection