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
        <center>GIFT DB</center>
    </h1>

    <h2>List of gift from database</h2>

    <table border="1px">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Brand</th>
            <th>Action</th>
        </tr>
        @foreach ($gift as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->brand }}</td>
                <td>
                    <form action="/gifts/{{ $item->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="DELETE">
                    </form>

                    <form action="/gifts/{{ $item->id }}/edit" method="get">
                        <input type="submit" value="MODIFY">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    <h2>Inser a gift in the database</h2>
    <form action="/gifts" method="post">
        @csrf
        <span>Name : </span>
        <input type="text" name="name">
        <br><br><br>
        <span>Brand : </span>
        <input type="text" name="brand">
        <br><br><br>
        <input type="submit" value="INVIA">
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
