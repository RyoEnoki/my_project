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
    <div class="post-detail">
        <h1>{{ $post->title }}</h1>
        <p><strong>Name:</strong> {{ $post->name }}</p>
        <p><strong>Body:</strong> {{ $post->body }}</p>
        <a href="{{ url('/postlist') }}">戻る</a>
    </div>
</body>

