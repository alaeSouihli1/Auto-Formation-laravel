<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>main page</title>
</head>
<body>
    <a href="{{route('briefs.create')}}" >Ajouter Brief</a>
    <input type="text" id="search">
    <div>
        @foreach($briefs as $brief)
        <table class="table">
            <tr>
                <td><a href="{{route('briefs.show',$brief->id)}}">{{$brief->nom}}</a></td>
                <td><a href="{{route('briefs.show',$brief->id)}}">{{$brief->dateHeureLivraison}}</a></td>
                <td><a href="{{route('briefs.show',$brief->id)}}">{{$brief->dateHeureRecuperation}}</a></td>
                <td><a href="{{route('briefs.edit',$brief->id)}}">Modifier</a></td>
                <td><a href="">Assigner</a></td>
                <td><a href="{{route('taches.create',$brief->id)}}">+Tache</a></td>


                <td>
                    <form action="{{route('briefs.destroy',$brief->id)}}" method="POST">
                        @csrf
                        @method('DELETE')

                        <input  type="submit" value="Supprimer" class="delete"/>
                    </form>
                </td>
            </tr>
        </table> 
        @endforeach
    </div>   
</body>
</html>