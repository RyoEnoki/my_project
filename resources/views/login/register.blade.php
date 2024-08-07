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
    <div class=login-wrapper>
        <div class=login-container>
            <h2>新規登録</h2>
            <form method="post" action="/register">
                @csrf
                <div>
                    名前 : <input type="text" name="name">
                </div>
                <div>
                    PW : <input type="password" name="password">
                </div>
                <div>
                    <input type="submit" value="送信">
                </div>
            </form>
        </div>
        <a href="/login">
            <p>戻る</p>
        </a>
    </div>
</body>
