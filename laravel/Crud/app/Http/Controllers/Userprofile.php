<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Userprofile extends Controller
{
    // about the model in php

    function get_data(){
        // echo "hello from getdata function <controller>";
       
       
       // call the database like this by making models name same as db table name
        // return Profile::all();
        // return Profile::where('number',121212)->get();
        // return Profile::find(0);
        // return Profile::first();
        
        $del = Profile::where('number',0);
        $del->delete();
        return Profile::all();


        // delete multiple column from database
        // Profile::destroy(array(12,12,1,21,2,12,12,31,421,134));
       

        // or call the db
    //    protected $table="profile";
    }

}
