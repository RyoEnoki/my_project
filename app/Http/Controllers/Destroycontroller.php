<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class Destroycontroller extends Controller
{
        public function destroy($id)
    {

    $deleted = DB::table('post')->where('id', $id)->delete();

    if ($deleted) {
        // 成功時のリダイレクト
        return redirect()->route('post.list')->with('success', 'Post deleted successfully');
    } else {
        // 失敗時のリダイレクト
        return redirect()->route('post.list')->with('error', 'Post not found');
    }
}
}
