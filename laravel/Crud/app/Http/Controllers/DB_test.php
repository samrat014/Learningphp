<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DB_test extends Controller
{
    function select(){

        // here goes the query to print the data from databaase 
        // make database connection and call this function 


      $result =  DB::table('user')->where('id','=',1)->get();
        echo $result;
    // echo "select from echo";
    }

function insert(){

    DB::table('user')->insert(
        array('name'=>'tam','age'=>'69','address'=>'mars')
    );

}

function update(){

    DB::table('user')->where('id', '=', 2) -> update(
        array('name'=>'rama')
    );

}
    function delete(){

        DB::table('user')->where('id', '=', 5) -> delete();
    
}

}