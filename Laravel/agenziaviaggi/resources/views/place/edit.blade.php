<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EditPlace</title>
</head>

<body>
    <h1>
        <center>PLACE DB</center>
    </h1>

    <h2>INSERISCI UNA NUOVA CITTA' </h2>
    <form action="/places/{{ $place->id }}" method="post">
        @csrf
        @method('PATCH')
        Name : <input type="text" name="name" value="{{ $place->name }}">
        <br><br><br>
        Abitanti : <input type="number" name="abitanti" value="{{ $place->abitanti }}">
        <br><br><br>
        Nazione : <input type="text" name="nazione" value="{{ $place->nazione }}">
        <br><br><br>
        <input type="submit" value="MODIFICA">
    </form>

    <br><br><br><br><br><br>
    CITTA <a href="/places">link</a>
    <br><br><br>

    DESTINAZIONI <a href="/tours">link</a>

</body>

</html>
