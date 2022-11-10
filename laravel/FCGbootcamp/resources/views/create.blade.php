@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/up" method="POST" enctype="multipart/form-data"> 
    @csrf
        <div class="row justify-content-center">
            <div class="col-6 p-1">
                <div class="top"><h1>add a new post</h1></div>    
                <strong>
                    caption </strong>
                    
                    <input type="text" 
                            name="caption"
                            placeholder="say smt about your post"> 
                    <br>
                    <strong>image :</strong>
                    <input class="file p-3" 
                            id="image"
                            name="image"
                             type="file">
                    <div class="row pt-4">
                        <button class="btn btn-primary">upload</button>
                    </div>
                </div>
            </div>
        </form>
</div>

@endsection
