@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6 p-1">
            <h1>   
           {{ Users->id }}
            </h1>
           
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
