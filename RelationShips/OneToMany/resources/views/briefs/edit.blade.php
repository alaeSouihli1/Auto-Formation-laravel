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
    <a href="{{route('briefs.index')}}">Return</a>
    <form action="{{route('briefs.update',$brief->id)}}" method="post">
        @csrf
        @method('PUT')
        <input type="text" placeholder="nom..." name="nom" value="{{$brief->nom}}">
        <input type="datetime-local"  name="dateHeureLivraison"  value="{{$brief->dateHeureLivraison}}">
        <input type="datetime-local"  name="dateHeureRecuperation"  value="{{$brief->dateHeureRecuperation}}">
        <button>Update</button>
    </form>
    <div>
        <a href="{{route('taches.create',$brief->id)}}">Ajouter tache</a>
        @foreach($taches as $tache)

        <table class="table">
            <tr>
                <td>{{$tache->nom}}</td>
                <td>{{$tache->description}}</td>
                <td>{{$tache->dateDebut}}</td>
                <td>{{$tache->dateFin}}</td>
                <td><a href="{{route('taches.edit',$tache->id)}}">Modifier</a></td>
                <td>
                    <form action="{{route('taches.destroy',$tache->id)}}" method="POST">
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
