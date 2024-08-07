<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Itemcontroller extends Controller
{
    public function index() {
        // DBから全ユーザーデータを取得
        $users = DB::table('users')->get();

        // ビューにデータを渡す
        return view('users.index', compact('users'));
    }
}
