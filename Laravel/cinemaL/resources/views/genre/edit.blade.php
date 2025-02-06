<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GenreDB</title>
</head>

<body>

    <h1>
        <center>GenreDB</center>
    </h1>


    <h2>Modifica del genere selezionato</h2>

    <form action="/genres/{{ $genre->id }}" method="post">
        @csrf
        @method('PATCH')
        Name :
        <input type="text" name="name" value="{{ $genre->name }}">
        <input type="submit" value="MODIFICA">
    </form>
</body>

</html>
