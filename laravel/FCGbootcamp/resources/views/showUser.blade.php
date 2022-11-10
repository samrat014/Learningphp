@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6 p-1">
            <h1>   
            {{ profile->id }} 
            </h1>
            <a href=" {{url('upload') }}">Add new post</a>
            
            <h1>{{ Auth::user()->description }} </h1>  

              <div><strong>{{Auth::user()->id}}</strong> followers</div>

            <div class="row">
                @foreach (Auth::user()->posts as $post)
                    {{ $post->id}}
                    <img src="{{ $post->image}}" alt="image">
                   {{ $post->caption}}
                @endforeach
            </div>
        </div>

        </div>
    </div>
</div>
@endsection
