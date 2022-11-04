<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('taches.update',[$tache->id])}}" method="post">
        @csrf
        @method('PUT')
        <input type="text" placeholder="nom..." name="nom" value="{{$tache->nom}}">
        <input type="text" placeholder="description..." name="nom" value="{{$tache->description}}">
        <input type="date"  name="dateDebut"  value="{{$tache->dateDebut}}">
        <input type="date"  name="dateFin"  value="{{$tache->dateFin}}">
        <input type="hidden" name="id_brief"  value='{{$tache->id_brief}}' >

        <button>Update</button>
    </form>
</body>
</html>