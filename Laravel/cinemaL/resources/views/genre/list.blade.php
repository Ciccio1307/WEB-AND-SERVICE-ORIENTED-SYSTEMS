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


    <h2>La lista dei generi inseriti nel database</h2>

    <table border="2px">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
        @foreach ($genre as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>
                    <form action="/genres/{{ $item->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="ELIMINA">
                    </form>
                    <form action="/genres/{{ $item->id }}/edit" method="get">
                        <input type="submit" value="MODIFICA">

                    </form>
                </td>
            </tr>
        @endforeach

    </table>
    <br><br><br>
    <h2>INSERISCI UN NUOVO GENERE</h2>
    <form action="/genres" method="post">
        @csrf
        Name :
        <input type="text" name="name">
        <input type="submit" value="INVIA">
    </form>


    <br><br><br><br>
    Genre : <a href="/genres"> link</a>

    <br><br><br>

    Film : <a href="/films"> link</a>
</body>

</html>
