<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
     //name = "abe";
     
     // return view('test',compact('name'));
     
     //$tell = "090";
     
     //return view('test')->with('denwa',"080");
        
    $test_array = ["red","green", "blue"];
    
    return view('test',compact('test_array'));
        
    }
}
