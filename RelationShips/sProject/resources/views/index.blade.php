<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <a href="{{route('posts.create')}}">Ajouter post</a>
    <div>
        @foreach($posts as $post)
        <ul class="list-group">
            <li class="list-group-item">
                <a href="{{route('posts.show',$post->id)}}">title:{{$post->title}}</a> 
                <a href="{{route('posts.edit',$post->id)}}">Modifier</a>
                <form action="{{route('posts.destroy',$post->id)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <input type="submit" value="delete  ">
                </form>
            </li>
        </ul>
        @endforeach
    </div>
</body>
</html>