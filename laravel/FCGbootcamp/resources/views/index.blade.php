@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-6 p-1">
            <h1>   
                {{ Auth::user()->name }} 
            </h1>
            <a href=" {{url('upload') }}">Add post</a><br>
            <!-- <a href=" /profile/{{ Auth::user()->id }}/edit">edit </a> -->
            <a href=" {{url('edit') }}">edit</a><br>
            
            <div>
                <strong>
               <br> <strong>
                    {{Auth::user()->posts->count()}} </strong> post
                <strong>
                    {{Auth::user()->id}}  </strong> followers
                </div>

    <div class="row pt-5">
        @foreach (Auth::user()->posts as $post)
        <div class="col-4 pb-5">
            <a href="/p/{{ $post->id }}">

                <img src="/storage/{{ $post->image }}" alt="image"><br>
            </a>
            {{ $post->caption}}
        </div>
            @endforeach
    </div>
</div>

        </div>
    </div>
</div>
@endsection
