<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; //URL gọi là request
use App\Http\Controllers\Controller;
use App\Models\Qa;

class QaController extends Controller
{
    public function index() {
        $qa = Qa::all();
        //dd($qa);
        return view("qa.index", ['qa' => $qa]);
    }

    public function add() {
        return view("qa.add");
    }

    public function store(Request $request) {
        //echo "Title" . $request->title;
        //dd($request);
        $qa = new Qa()  ;
        $qa->title = $request->title;
        $qa->content = $request->content;
        $qa->save();
        die();
    }
}