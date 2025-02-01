<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SquadDB</title>
</head>

<body>
    <h1>
        <center>SQUAD DB</center>
    </h1>
    <h2>MODIFICA LA SQUADRA SCELTA</h2>
    <form action="/teams/{{ $team->id }}" method="post">
        @csrf
        @method('PATCH')
        Nome : <input type="text" name="name" value="{{ $team->name }}">
        <br><br><br>
        Punti : <input type="number" name="punti" value="{{ $team->punti }}">
        <br><br><br>
        <input type="submit" value="MODIFCA">

    </form>
</body>

</html>
