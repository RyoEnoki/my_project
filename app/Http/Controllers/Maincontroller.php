<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Maincontroller extends Controller
{
    public function index( Request $request ) {
        return view("index" , []);
    }
}
