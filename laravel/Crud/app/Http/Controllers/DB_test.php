<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DB_test extends Controller
{
    function select(){

        // here goes the query 

    //   $result =  DB::table('peeplace')->where('id','=',1)->get();
    //     print_r($result);
    echo "select from echo";
    }
}
