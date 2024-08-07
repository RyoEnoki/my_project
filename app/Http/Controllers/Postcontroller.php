<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Postcontroller extends Controller
{
        public function postup( Request $request) {
        $name = $request->input("name");
        $title = $request->input("title");
        $body = $request->input("body");

        DB::connection("mysql")->insert("insert into post (name,title,body) values ('" . $name . "','" . $title . "','" . $body . "')");

        return response("投稿完了！<a href='/login'>ホームへ戻る</a>");
        }
}
