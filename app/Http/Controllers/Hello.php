<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hello extends Controller
{
    public function index()
    {
        return view('hello', ['name'=>'world']);
    }

    public function show($name)
    {
        return view('hello', ['name'=>$name]);
    }
}
