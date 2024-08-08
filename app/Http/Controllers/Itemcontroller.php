<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Itemcontroller extends Controller
{
    public function posts( Request $request) {
        $posts = DB::table('post')->orderBy('id', 'desc')->paginate(6);
    // ビューにデータを渡す
    return view('post.postlist', compact('posts'));
}
    public function index( Request $request) {
        $posts = DB::table('post')->orderBy('id', 'desc')->limit(3)->get();
    // ビューにデータを渡す
    return view('index', compact('posts'));
}

    public function show($id) {
        // 特定のIDに基づく投稿を取得
        $post = DB::table('post')->where('id', $id)->first();

        // 投稿が存在しない場合は404エラーを返す
        if (!$post) {
            abort(404, '投稿が見つかりません');
        }

        // ビューにデータを渡す
        return view('post.postshow', compact('post'));
    }
}
