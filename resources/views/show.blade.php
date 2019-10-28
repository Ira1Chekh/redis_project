<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Posts</title>
    </head>
    <body>
        <div class="container" style="margin-top: 20px">
            <h1>Post № {{$post->id}}</h1>
            <h3>{{$post->title}}</h3>
            <p>{{$post->content}}</p>
            <p>Views: {{visits($post)->count()}}</p>
        </div>
    </body>
</html>
