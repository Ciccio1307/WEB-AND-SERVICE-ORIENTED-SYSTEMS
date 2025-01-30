<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ListProducts</title>
</head>

<body>
    <center>
        <h1>PRODUCTS DB</h1>
    </center>
    <h2>LISTA DEI PRODOTTI</h2>
    <table border="1px">
        <tr>
            <th>Name</th>
            <th>Pezzi</th>
            <th>Peso</th>
            <th>Brand</th>
            <th>Azione</th>
        </tr>
        @foreach ($product as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->pezzi }}</td>
                <td>{{ $item->peso }}</td>
                <td>{{ $item->brand->name }}</td>
                <td>
                    <form action="/products/{{ $item->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="DELETE">
                    </form>
                    <form action="/products/{{ $item->id }}/edit" method="get">
                        <input type="submit" value="MODIFICA">
                    </form>
                </td>
            </tr>
        @endforeach

    </table>

    <br><br><br><br>
    <h2>INSERISCI UN NUOVO PRODOTTO NEL DATABASE</h2>
    <form action="/products" method="post">
        @csrf
        Name : <input type="text" name="name">
        <br><br><br>

        Pezzi : <input type="number" name="pezzi">
        <br><br><br>

        Peso : <input type="number" name="peso">
        <br><br><br>

        <select name="brand_id">
            @foreach ($brand as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
        <input type="submit" value="INVIA">

    </form>

</body>

</html>
