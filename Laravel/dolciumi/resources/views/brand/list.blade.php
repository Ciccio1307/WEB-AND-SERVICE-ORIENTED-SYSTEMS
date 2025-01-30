<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ListBrand</title>
</head>

<body>
    <center>
        <h1>BRAND DB</h1>
    </center>

    <h2>LISTA DEI BRAND</h2>

    <table border="1px">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Dipendenti</th>
            <th>AZIONE</th>
        </tr>

        @foreach ($brand as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->employers }}</td>
                <td>
                    <form action="/brands/{{ $item->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="DELETE">
                    </form>
                    <form action="/brands/{{ $item->id }}/edit" method="get">
                        <input type="submit" value="MODIFICA">
                    </form>
                </td>

            </tr>
        @endforeach
    </table>
    <br><br><br><br><br>
    <h2>INSERISCI UN NUOVO BRAND</h2>
    <form action="/brands" method="post">
        @csrf
        Name : <input type="text" name="name">
        <br><br><br>
        Dipendenti : <input type="text" name="employers">
        <br><br><br>
        <input type="submit" value="INVIA">

    </form>
</body>

</html>
