<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Logincontroller extends Controller
{
    public function login( Request $request) {
        $loginId = $request->session()->get( "login_id" , null);
        $variables = [
            "isLoginActive" => isset( $loginId )
        ];
        return view("index", compact("variables"));
    }
    public function register( Request $request) {
        $name = $request->input("name");
        $password = $request->input("password");
        $oldRecords = DB::connection('mysql')->select("select count(*) from user where name = '" . $name . "'");

        if (count($oldRecords) == 0) {
            return response("処理中に問題が発生しました。<a href='/regist'>前のページへ戻る</a>");
        }
        $record = (array)($oldRecords[0]);
        if ($record["count(*)"] > 0) {
            return response("すでに存在するアカウント名です。<a href='/regist'>前のページへ戻る</a>");
        }
        DB::connection("mysql")->insert("insert into user (name,password) values ('" . $name . "','" . $password . "')");
        $records = DB::connection('mysql')->select("select * from user where name = '" . $name . "'");

        if (count($records) == 0) {
        return response("ユーザーデータの登録処理中に問題が発生しました。<a href='/login'>前のページへ戻る</a>");
        }
        $request->session()->put( "login_id", $records[0]->id );

        return response("登録が完了しました。<a href='/'>前のページへ戻る</a>");
        }
    public function signin(Request $request){
        $name = $request->input("name");
        $password = $request->input("password");

        $records = DB::connection('mysql')->select("select * from user where name ='" . $name . "' and password = '" . $password . "'");
        if (count($records) == 0) {
        return response("処理中に問題が発生しました。<a href='/login'>前のページへ戻る</a>");
        }

        $request->session()->put("login_id", $records[0]->id);
        return response("ログインが完了しました。<a href='/login'>前のページへ戻る</a>");
    }

    public function unregister(Request $request)
    {
        $request->session()->flush();
        return response("ログアウトが完了しました。<a href='/'>前のページへ戻る</a>");
    }
}
