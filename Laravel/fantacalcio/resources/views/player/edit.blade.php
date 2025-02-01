<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>playerDB</title>
</head>

<body>
    <h1>
        <center>PLAYERS DB </center>
    </h1>

    <h2>Modifica IL GIOCATORE SELEZIONATO</h2>

    <form action="/players" method="post">
        @csrf
        @method('PATCH')
        Nominativo : <input type="text" name="name" value="{{ $player->name }}">
        <br><br><br>
        FantaMedia : <input type="number" name="fantamedia" value="{{ $player->fantamedia }}">
        <br><br><br>
        Infortunato : <select name="infortunato">

            <option value=1>SI</option>
            <option value=0>NO</option>
        </select>
        <br><br><br>
        Team di Appartenenza :
        <select name="team_id">

            @foreach ($team as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
        <br><br><br>
        <input type="submit" value="INVIA">

    </form>
</body>

</html>
