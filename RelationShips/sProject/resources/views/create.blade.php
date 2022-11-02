<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Create post</title>
</head>
<body>
<form method="post" action="{{route('posts.store')}}" >
 @csrf
  <div class="form-group">
    <label for="">Title</label>
    <input type="text" class="form-control" id="title" placeholder="title..." name="title">
  </div>
  <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
</body>
</html>