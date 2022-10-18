<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>posts</title>
</head>

<body>
    @foreach ($posts as $post)
        <div style="margin: 0px 200px">
            <div style="margin-bottom: 50px">
                <x-newFirstComponent name='yvan' :title='$post->title' />
                <p>{{ $post->title }}</p>
                <p>{{ $post->content }} <br> Autor: {{ $post->autor }}</p>
            </div>
        </div>
    @endforeach
</body>

</html>
