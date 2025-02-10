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
        <h1>KIDS DB</h1>
    </center>



    <h2>INSERT A NEW KID</h2>

    <form action="/kids/{{ $kid->id }}" method="post">
        @csrf
        @method('PATCH')
        <span>Name</span>
        <input type="text" name="name" value="{{ $kid->name }}">
        <br><br><br><br>
        <span>Age</span>
        <input type="text" name="age" value="{{ $kid->age }}">
        <br><br><br><br>
        <span>Address</span>
        <input type="text" name="address" value="{{ $kid->address }}">
        <br><br><br><br>
        <select name="gift_id">
            @foreach ($gift as $item)
                <option value={{ $item->id }}>{{ $item->name }} - {{ $item->brand }}</option>
            @endforeach
        </select>
        <br><br><br>
        <input type="submit" value="INVIA">

    </form>

    <br><br><br><br><br>



</body>

</html>
