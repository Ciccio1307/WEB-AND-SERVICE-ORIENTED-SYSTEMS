<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ListTour</title>
</head>

<body>

    <h1>
        <center>
            Tour Database
        </center>
    </h1>


    <h2>Lista dei tour del database</h2>
    <table border="1px">
        <tr>
            <th>Nome Tour</th>
            <th>Citta Tour</th>
            <th>Prezzo Tour</th>
            <th>Azione</th>
        </tr>
        @foreach ($tour as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->place->name }}</td>
                <td>{{ $item->price }}</td>
                <td>

                    <form action="/tours/{{ $item->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="ELIMINA">
                    </form>

                    <form action="/tours/{{ $item->id }}/edit" method="get">
                        <input type="submit" value="MODIFICA">
                    </form>
                </td>


            </tr>
        @endforeach
    </table>
    <br><br><br>

    <h2>INSERISCI UN NUOVO TOUR NEL database</h2>

    <form action="/tours" method="post">
        @csrf
        Name : <input type="text" name="name">
        <br><br><br>
        Citta : <select name="place_id">
            @foreach ($place as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>

        <br><br><br>
        Prezzo : <input type="number" name="price">
        <br><br><br>
        <input type="submit" value="INVIA">
    </form>


    <br><br><br><br><br><br>
    CITTA <a href="/places">link</a>
    <br><br><br>

    DESTINAZIONI <a href="/tours">link</a>
</body>

</html>
