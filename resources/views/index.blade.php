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
            <h1>Posts</h1>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Views</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <th scope="row">
                            <a href="/posts/{{$post->id}}">
                                {{$post->id}}</a>
                        </th>
                        <td>{{$post->title}}</td>
                        <td>{{$post->content}}</td>
                        <td>{{visits($post)->count()}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
