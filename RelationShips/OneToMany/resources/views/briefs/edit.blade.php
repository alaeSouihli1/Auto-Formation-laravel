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
        <input type="text" id="search">


        <table class="table" >
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Date debut</th>
                    <th>Date fin</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>


                </tr>
            </thead>
            <tbody id="table1" class="table1">
             @foreach($taches as $tache)
                <tr>
                    <td>{{$tache->nom}}</td>
                    <td>{{$tache->description}}</td>
                    <td>{{$tache->dateDebut}}</td>
                    <td>{{$tache->dateFin}}</td>
                    <input type="hidden" value="{{$tache->id_brief}}" id="idB" >
                    <td><a href="{{route('taches.edit',$tache->id)}}">Modifier</a></td>
                    <td>
                        <form action="{{route('taches.destroy',$tache->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input  type="submit" value="Supprimer" class="delete"/>                    
                        </form>
                    </td>
                
                </tr>
              @endforeach
            </tbody>
            <tbody  id="table2"  class="table2">

            </tbody>
        </table>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <script type="text/javascript">
            $('#search').on('keyup',function(){
                $value=$(this).val();
                $idBrief=$('#idB').val();
                if($value){
                    $('.table1').hide();
                    $('.table2').show();
                }else{
                    
                    $('.table2').hide();
                    $('.table1').show();
                }
                $.ajax({
                    type:'get',
                    url:'{{URL::to("search2")}}',
                    data:{'search2':$value,
                        'idBrief':$idBrief},
                    success:function(data){
                        console.log(data);
                        $('#table2').html(data);
                    }
                });
            })
            </script>

</body>
</html>
