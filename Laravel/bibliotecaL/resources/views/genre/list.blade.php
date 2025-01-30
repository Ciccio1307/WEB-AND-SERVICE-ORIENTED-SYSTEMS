<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ListGenre</title>
</head>

<body>


    <h1>
        <center>GENRE DB</center>
    </h1>

    <H2>LIST OF GENRE</H2>

    <table border="1px">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
        @foreach ($genres as $item)
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
    <h2>INSERT A NEW GENRE</h2>
    <form action="/genres" method="post">
        @csrf
        Name :
        <input type="text" name="name">
        <br><br><br>
        <input type="submit" value="INVIA">
    </form>
</body>

</html>
