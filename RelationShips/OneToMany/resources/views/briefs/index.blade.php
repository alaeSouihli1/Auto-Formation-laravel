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
        <table class="table">
            <thead>
                    <th>Nom</th>
                    <th>Date/heure livraison</th>
                    <th>Date/heure recuperation</th>
                    <th>modifier</th>
                    <th>Assigner</th>
                    <th>+tache</th>
                    <th>supprimmer</th>

            </thead>

            <tbody>
            @foreach($briefs as $brief)

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
                @endforeach

            </tbody>

           
        </table> 
    </div>   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script type="text/javascript">
        $('#search').on('keyup',function(){
            $value=$(this).val();
        $.ajax({
            type:'get',
            url:'{{URL::to('search')}}',
            data:{'search':$value},
            success:function(data){
                $('tbody').html(data);
            }
        })
        })
    </script>
</body>
</html>