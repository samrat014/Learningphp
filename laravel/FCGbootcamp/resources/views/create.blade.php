@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/up" method="POST"> 
    @csrf
        <div class="row justify-content-center">
            <div class="col-6 p-1">
                <div class="top"><h1>add a new post</h1></div>    
                <strong>
                    caption </strong>
                    
                    <input type="text" placeholder="say smt about your post"> 
                    <br>
                    <strong>image :</strong>
                    <input class="file p-3" type="file">
                    <div class="row pt-4">
                        <button class="btn btn-primary">upload</button>
                    </div>
                </div>
            </div>
        </form>
</div>

@endsection
