<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EditBrand</title>
</head>

<body>

    <center>
        <h1>BRAND DB</h1>
    </center>


    <h2>MODIFICA BRAND</h2>
    <form action="/brands/{{ $brand->id }}" method="post">
        @csrf
        @method('PATCH')
        Name : <input type="text" name="name" value="{{ $brand->name }}">
        <br><br><br>
        Dipendenti : <input type="text" name="employers" value="{{ $brand->employers }}">
        <br><br><br>
        <input type="submit" value="INVIA">

    </form>

</body>

</html>
