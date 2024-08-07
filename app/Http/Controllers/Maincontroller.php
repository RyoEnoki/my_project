<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Maincontroller extends Controller
{
    public function index( Request $request ) {
        return view("index" , []);
    }
    public function regist( Request $request ) {
        return view("login/register",[]);
    }
    public function login( Request $request ) {
        return view("login/login",[]);
    }
}
