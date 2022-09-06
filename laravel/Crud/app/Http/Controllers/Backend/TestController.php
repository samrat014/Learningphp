<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Test;
use App\Http\Requests\TestControllerCreateRequest;


class TestController extends Controller
{
    public function test(TestControllerCreateRequest $CreateValidation, Test $tests)
    {
        return view('todo',compact($tests->paginate()));
    }
}
