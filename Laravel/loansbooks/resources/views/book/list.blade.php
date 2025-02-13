<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>
        <center>BOOKS DB</center>
    </h1>

    <h2>ECCO LA LISTA DEI LIBRI INSERITI NEL DATABASE</h2>
    <table border="10px">
        <tr>
            <th>Titolo</th>
            <th>Autore</th>
            <th>Genere</th>
            <th>NUmero di Copie disponibili</th>
            <th>Azione</th>

        </tr>

        @foreach ($book as $item)
            <tr>
                <td>{{ $item->title }}</td>
                <td>{{ $item->author }}</td>
                <td>{{ $item->genre }}</td>
                <td>{{ $item->copies }}</td>
                <td>

                    <form action="/books/{{ $item->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="ELIMINA">
                    </form>
                    <form action="/books/{{ $item->id }}/edit" method="get">

                        <input type="submit" value="MODIFICA">


                    </form>
                </td>
            </tr>
        @endforeach
        </tr>

    </table>













    <h2>INSERISCI UN LIBRO NEL DATABASE</h2>
    <form action="/books" method="post">
        @csrf
        <span>Titolo</span>
        <input type="text" name="title">
        <br><br><br>
        <span>Autore</span>
        <input type="text" name="author">
        <br><br><br>
        <span>Genre</span>
        <input type="text" name="genre">
        <br><br><br>
        <span>Copie DISPONIBILI</span>
        <input type="number" name="copies">
        <br><br><br>
        <input type="submit" value="INVIA">
    </form>

</body>

</html>
