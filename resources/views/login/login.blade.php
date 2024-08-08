<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/login.css">

    <title></title>
</head>
<body>
    <div class="login-wrapper">
        <div class="login-container">
            <h2>ログイン</h2>
        <form method="post" action="signin">
            @csrf
                @csrf
                <div class="name">
                    名前 : <input type="text" name="name">
                </div>
                <div class="password">
                    PW : <input type="password" name="password">
                </div>
                <div class="submit">
                    <input type="submit" value="送信">
                </div>
            </form>
        <a href="/login">
            <p class="back">戻る</p>
        </a>
        </div>

    </div>
</body>
