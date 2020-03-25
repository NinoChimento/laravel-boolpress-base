<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="{{asset("css/app.css")}}">
    <title>Document</title>
</head>
<body>
<form action="{{route("Posts.store")}}" method="POST">
    @csrf
    @method("POST")
    <input class="form-control" type="text" name="title" value="" placeholder="title">
    <input class="form-control" type="text" name="genre" value="" placeholder="genre">
    <input class="form-control" type="text" name="img" value="" placeholder="img  ">
     <textarea class="form-control" name="description" value="" placeholder="Descrizione" rows="3"></textarea>
     <button type="submit">Crea articolo</button>
</form>
</body>
</html>