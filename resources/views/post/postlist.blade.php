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

    @foreach($posts as $post)
    <a href="{{ route('post.show', $post->id) }}">
        <p>{{ $post->title }}</p>
        </a>
        <p>{{ Str::limit($post->body, 100, '...') }}</p>
    @endforeach
    <a href="/login">
        <p>戻る</p>
    </a>
    <div>
        {{ $posts->links('pagination::bootstrap-4') }}
    </div>

</body>

