@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">

         <form action="delete/{{$post->id}}" method="delete">
    
                <div class="container">
                      <img src="/storage/{{ $post->image }}" alt="image">
                </div>
                <div class=" p-3">
            <input class="file p-2" type="text" value="{{$post->caption}}"><br>
            </div>  
 
              <button> delete</button>
    
           </form>
        </div>
    </div>
</div>

@endsection
