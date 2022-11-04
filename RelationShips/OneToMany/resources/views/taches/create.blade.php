<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('taches.store')}}" method="post">
        @csrf
        <input type="text" placeholder="nom..." name="nom">
        <input type="text" placeholder="Description..." name="description">
        <input type="date" placeholder="Date début..." name="dateDebut">
        <input type="date" placeholder="Date fin..." name="dateFin">
        <input type="hidden" name="id_brief"  value='{{$id_brief}}' >

        <button>Ajouter</button>
    </form>
</body>
</html>