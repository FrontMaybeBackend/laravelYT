<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class helloWorldController extends Controller
{
    public function show(){
        return view ("hello");
    }
}
