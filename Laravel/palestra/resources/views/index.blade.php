<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GestionalePalestre</title>
</head>
<body>
    <center><h1>GESTIONALE PALESTRE</h1></center>

    <h2>LISTA DEL GESTIONALE DELLE PALESTRE </h2>

    <table border="1px">
        <tr>
            <th>Numero Palestra</th>
            <th>Nome Palestra</th>
            <th>Iscritti Palestra</th>
            <th>Macchine in  Palestra</th>
            <th>Azioni disponibili</th>
        </tr>

@foreach ($gym as $ez )
<tr>
<td>{{$ez->id}}</td>
<td>{{$ez->name}}</td>
<td>{{$ez->subscriber}}</td>
<td>{{$ez->machine}}</td>

<td>

    <form action="/gyms/{{$ez ->id}}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit">ELIMINA</button>
    </form>
    <form action="/gyms/{{ $ez->id }}/edit" method="get">
        <button type="submit">MODIFICA</button>
        </form>
</td>


</tr>

@endforeach


    </table>

    <h2>INSERIMENTO DI UNA NUOVA PALESTRA </h2>

<form action="/gyms" method="post">
@csrf
Nome palestra : <input type="text" name="name" >

<br><br>
Iscritti palestra : <input type="number" name="subscriber" >
<br><br>
Macchine palestra : <input type="number" name="machine" >
<br><br>
<input type="submit" value="Invia">
</form>

</body>
</html>
