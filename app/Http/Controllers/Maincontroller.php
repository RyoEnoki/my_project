<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Maincontroller extends Controller
{
    public function index( Request $request ) {
        $posts = DB::table('post')->orderBy('id', 'desc')->limit(3)->get();

        return view("index", compact("posts"));
    }
    public function regist( Request $request ) {
        return view("login/register",[]);
    }
    public function login( Request $request ) {
        return view("login/login",[]);
    }
    public function postlist( Request $request ) {
        return view("post/postlist", []);
    }
    public function post( Request $request ) {
        return view("post/post", []);
    }
}
