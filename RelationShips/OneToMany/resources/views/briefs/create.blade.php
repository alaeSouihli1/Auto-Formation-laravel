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
    <form action="{{route('briefs.store')}}" method="post">
        @csrf
        <input type="text" placeholder="nom..." name="nom">
      
        <input type="datetime-local"  name="dateHeureLivraison">
        <input type="datetime-local"  name="dateHeureRecuperation">

        <button>Ajouter</button>
    </form>
</body>
</html>
