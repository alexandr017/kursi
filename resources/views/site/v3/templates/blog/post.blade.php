<!DOCTYPE html>
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div class="container">
    <h1>{{$post->h1}}</h1>

    {!! $post->lead !!}

    preview
        {!! $post->content !!}

    @include('site.v3.templates.blog.comments.comment')

</div>

<style>
    body {
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        padding: 8px 8px 8px 18px;
        box-sizing: border-box;
        margin: 0 auto;
    }

    .container {
        max-width: 100%;
        margin: 0 auto;
        width: 100%;
        padding: 0 50px;
    }

</style>

</body>
</html>