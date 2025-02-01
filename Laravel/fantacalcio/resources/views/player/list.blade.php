<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PLayerDB</title>
</head>

<body>
    <h1>
        <center>PLAYER DB</center>
    </h1>

    <h2>ECCO LA LISTA DEI CALCIATORI INSERITI NEL DATABASE</h2>
    <table border="1px">
        <tr>
            <th>Nome</th>
            <th>FantaMedia</th>
            <th>Infortunato</th>
            <th>Team di appartenenza</th>
            <th>AZIONI</th>
        </tr>

        @foreach ($player as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->fantamedia }}</td>
                <td>{{ $item->infortunato ? 'si' : 'no ' }}</td>
                <td>{{ $item->team->name }}</td>
                <td>

                    <form action="/players/{{ $item->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="ELIMINA">
                    </form>

                    <form action="/players/{{ $item->id }}/edit" method="get">

                        <input type="submit" value="MODIFICA">
                    </form>
                </td>


            </tr>
        @endforeach

    </table>
    <br><br><br><br><br><br>
    <form action="/players" method="post">
        @csrf
        Nominativo : <input type="text" name="name">
        <br><br><br>
        FantaMedia : <input type="number" name="fantamedia">
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
    <br><br><br><br>
    <span>ECCO A TE LA LISTA DELLE SQUADRE </span>
    <a href="/teams"> link </a>
    <br><br><br>
    <span>ECCO A TE LA LISTA DEI CALCIATORI </span>
    <a href="/players"> link </a>
    <br><br><br>

    Ordina i teams in base al punteggio <a href="/team/order">link </a>
    <br><br><br>
    Elimina le squadre con punteggio minore di 1000 <a href="/team/deletePoint">link </a>
    <br><br><br>
    VISUALIZZA le squadre con punteggio superiore di 1000 <a href="/team/filterPoint">link </a>
    <br><br><br>
</body>


</html>
