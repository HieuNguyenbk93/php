<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; //URL gọi là request

class Post extends Controller
{
    public function index(Request $request) {
        $a = $request->stn;
        $b = $request->sth;
        $c = $a + $b;
        return view('Post',[ "stn"=>$a, "sth"=>$b, "ths"=>$c ]);
    }
}