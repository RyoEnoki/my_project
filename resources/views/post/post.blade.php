<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title></title>
</head>
<body>
    <div class="post-wrapper">
        <div class="post-container">
            <h2>投稿しよう</h2>
            <form method="post" action="/postup">
                @csrf
                <div>
                    ニックネーム : <input type="text" name="name">
                </div>
                <div>
                    タイトル : <input type="text" name="title">
                </div>
                <div>
                    本文 : <input type="textarea" name="body">
                </div>
                <div>
                    <input type="submit" value="投稿">
                </div>
            </form>
        </div>
        <a href="/login">
            <p>戻る</p>
        </a>
    </div>
</body>
