@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6 p-1">
            <h1>   
                
            @foreach($posts as $post)
                
                {{$post->caption}}

            @endforeach
            <div class="row">

            </div>
        </div>

        </div>
    </div>
</div>
@endsection