<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlaceLIst</title>
</head>

<body>

    <h1>
        <center>PLACE DB</center>
    </h1>

    <h2>Lista delle città disponibili del Database</h2>

    <table border="1px">
        <tr>
            <th>Name</th>
            <th>Abitanti</th>
            <th>Nazione</th>
            <th>Azione</th>
        </tr>
        @foreach ($place as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->abitanti }}</td>
                <td>{{ $item->nazione }}</td>
                <td>
                    <form action="/places/{{ $item->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="ELIMINA">
                    </form>

                    <form action="/places/{{ $item->id }}/edit" method="get">
                        <input type="submit" value="MODIFICA">
                    </form>
                </td>

            </tr>
        @endforeach

    </table>
    <br><br><br>
    <h2>INSERISCI UNA NUOVA CITTA' </h2>
    <form action="/places" method="post">
        @csrf
        Name : <input type="text" name="name">
        <br><br><br>
        Abitanti : <input type="number" name="abitanti">
        <br><br><br>
        Nazione : <input type="text" name="nazione">
        <br><br><br>
        <input type="submit" value="INVIA">
    </form>

    <br><br><br><br><br><br>
    CITTA <a href="/places">link</a>
    <br><br><br>

    DESTINAZIONI <a href="/tours">link</a>
</body>

</html>
