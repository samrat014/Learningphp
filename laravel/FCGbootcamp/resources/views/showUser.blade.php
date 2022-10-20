@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6 p-1">
            <h1>   
                
            </h1>
            <a href="">Add new post</a>
            <h1>{{ Auth::user()->description }} </h1>  
              <div><strong>{{Auth::user()->id}}</strong> followers</div>
              <div class="row">

            </div>
        </div>

        </div>
    </div>
</div>
@endsection
