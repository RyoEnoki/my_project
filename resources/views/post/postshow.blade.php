<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/postshow.css">
    <title></title>
</head>
<body>
    <div class="post-detail">
        <h1 class="title">{{ $post->title }}</h1>
        <p class="name"><strong>ニックネーム:</strong> {{ $post->name }}</p>
        <p class="body"><strong>本文:</strong><br> {{ $post->body }}</p>

<form action="{{ route('post.destroy', ['id' => $post->id]) }}" method="POST">
    @csrf
    @method('DELETE')  <!-- DELETEメソッドを指定 -->
    <button type="submit" class="btn btn-danger">削除</button>
    <br>
</form>
        <a href="{{ url('/postlist') }}">戻る</a>
    </div>
</body>

