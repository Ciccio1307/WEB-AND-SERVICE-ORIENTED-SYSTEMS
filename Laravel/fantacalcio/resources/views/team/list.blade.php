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

    <h2>LISTA DELLE SQUADRE</h2>
    <table border="1px">
        <tr>
            <th>Nome</th>
            <th>Punti</th>
            <th>Azioni</th>
        </tr>
        @foreach ($team as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->punti }}</td>
                <td>
                    <form action="/teams/{{ $item->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="ELIMINA">
                    </form>

                    <form action="/teams/{{ $item->id }}/edit" method="get">

                        <input type="submit" value="MODIFICA">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <h2>INSERISCI UNA NUOVA SQUADRA</h2>
    <form action="/teams" method="post">
        @csrf
        Nome : <input type="text" name="name">
        <br><br><br>
        Punti : <input type="number" name="punti">
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

    Ordina i teams in base al punteggio <a href="/teams/order">link </a>
    <br><br><br>

    <br><br><br>
    Elimina le squadre con punteggio minore di 1000 <a href="/teams/deletePoint">link </a>
    <br><br><br>
    VISUALIZZA le squadre con punteggio superiore di 1000 <a href="/teams/filterPoint">link </a>
    <br><br><br>
</body>

</html>
