<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @foreach ($posts as $post)
        <h2>Post by {{$post -> author}}</h2>
        <div>
            <h3>{{$post -> title}}</h3>
            <p>{{$post -> content}}</p>
            <img style="max-width: 200px; max-height: 200px" src='{{$post -> img}}'>
        </div> 
        <a href="post/{{$post->id}}">details</a>
        <form method="POST" action="delete/post/{{$post->id}}">
            @csrf
            <button>delet!!!</button>
        </form>
        <hr>
    @endforeach

    <h1>Comment</h1>
    <div>
        <form method="get" action="/posts">
            <input type="text" name="author" placeholder="Enter your name">
            <input type="text" name="content" placeholder="Enter your comment">
            <input type="text" name="img" placeholder="optional: image URL">
            <button></button>
        </form>
    </div>

</body>
</html>