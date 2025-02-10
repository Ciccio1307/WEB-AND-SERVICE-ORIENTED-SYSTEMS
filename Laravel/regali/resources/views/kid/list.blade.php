<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <center>
        <h1>KID DB</h1>

    </center>

    <h2>List of kids</h2>
    <p>Have you added {{ count($kid) }} kids</p>
    <br>
    <table border="1px">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Address</th>
            <th>Gift</th>
            <th>Action</th>
        </tr>

        @foreach ($kid as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->age }}</td>
                <td>{{ $item->address }}</td>
                <td>{{ $item->gift->name }}</td>
                <td>
                    <form action="/kids/{{ $item->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="DELETE">
                    </form>

                    <form action="/kids/{{ $item->id }}/edit" method="get">
                        <input type="submit" value="MODIFY">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    <h2>INSERT A NEW KID</h2>

    <form action="/kids" method="post">
        @csrf
        <span>Name</span>
        <input type="text" name="name">
        <br><br><br><br>
        <span>Age</span>
        <input type="text" name="age">
        <br><br><br><br>
        <span>Address</span>
        <input type="text" name="address">
        <br><br><br><br>
        <select name="gift_id">
            @foreach ($gift as $item)
                <option value={{ $item->id }}>{{ $item->name }} - {{ $item->brand }}</option>
            @endforeach
        </select>
        <br><br><br>
        <input type="submit" value="INVIA">

    </form>


    <H2>FILTRA I BAMBINI PER REGALO</H2>
    <form action="/kids/filterByGift" method="post">
        @csrf
        <select name="gift_id">
            @foreach ($gift as $item)
                <option value={{ $item->id }}>{{ $item->name }}</option>
            @endforeach
        </select>
        <input type="submit" value="FILTRA">

    </form>
    <br><br><br><br><br><br><br>
    <span>GIFT</span>
    <a href="/gifts">link</a>
    <br><br><br><br>


    <span>KID</span>
    <a href="/kids">link</a>
    <br><br><br><br>
</body>

</html>
