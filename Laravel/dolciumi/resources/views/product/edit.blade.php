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

    <h2>MODIFICA UN NUOVO PRODOTTO NEL DATABASE</h2>
    <form action="/products/{{ $product->id }}" method="post">
        @csrf
        @method('PATCH')
        Name : <input type="text" name="name" value="{{ $product->name }}">
        <br><br><br>

        Pezzi : <input type="number" name="pezzi"value="{{ $product->pezzi }}">
        <br><br><br>

        Peso : <input type="number" name="peso" value="{{ $product->peso }}">
        <br><br><br>

        <select name="brand_id">
            @foreach ($brand as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
        <br><BR><BR></BR></BR>
        <input type="submit" name="UPDATE">
    </form>

</body>

</html>
