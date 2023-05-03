@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6 p-1">
            <h1>

                {{Auth::user()->name}}           
            </h1>

            <p>
                inorder to futher use igclone please varify your age
            </p>
            <form method="POST" action="/checkage">
                    @csrf

                <label for="age">Age:</label>
                <input type="number" id="age" name="age" required>

                <button type="submit">submit</button>
                </form>
        </div>

        </div>
    </div>
</div>
@endsection