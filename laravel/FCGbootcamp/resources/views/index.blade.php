@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-6 p-1">
            <h1>   
                {{ Auth::user()->name }} 
            </h1>
            <a href=" {{url('upload') }}">Add post</a>
            
            <div>
                <strong>
                    {{ Auth::user()->profile->description }}    
                    {{Auth::user()->id}} <br> 
                </strong> followers</div>
                

    <div class="row">
        @foreach (Auth::user()->posts as $post)
        <img src="/storage/{{ $post->image }}" alt="image">
        {{ $post->caption}}
        @endforeach
    </div>
</div>

        </div>
    </div>
</div>
@endsection
