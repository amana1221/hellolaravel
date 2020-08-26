<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
      //return view('hello');
        
      $test_1 = "テスト";

     return view('Hello')->with('test_1',$test_1);
    }
}
