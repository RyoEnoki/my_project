<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/post.css">

    <title></title>
</head>
<body>
    <div class="post-wrapper">
        <div class="post-container">
            <h2>投稿しよう</h2>
            <form method="post" action="/postup">
                @csrf
                <div class="name">
                    ニックネーム : <input type="text" name="name">
                </div>
                <divc class="title">
                    タイトル : <input type="text" name="title">
                </divc>
                <div>
                    <strong>本文 : </strong>
                    <textarea class="main" type="textarea" name="body" wrap="soft">
                        </textarea>
                </div>
                <div>
                    <input type="submit" value="投稿">
                </div>
            </form>
        <a href="/login">
            <p>戻る</p>
        </a>
        </div>

    </div>
</body>
