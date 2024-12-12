<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProdottiUsati</title>
</head>
<body>
    <h1><center>PRODOTTI USATI DB</center></h1>
    <br>
    <h2> LISTA PRODOTTI</h2>
    <br>
    <br>
    <?php 

require_once "connection.php";

$sql = "SELECT * FROM Vendite";
$result = $connection ->query($sql);
while ( $row = $result -> fetch_assoc())
{
    print "<form action = 'read.php' method='post' >";
    print "<input type = 'hidden' name = 'id' value='".$row["id"]."' name='id' >";
    print "Prodotto = ".$row["prodotto"]." <br>";
    print "Prezzo = ".$row["prezzo"]." <br>";
    print "Data Vendita= ".$row["data_vendita"]." <br>";
    print "<a href=delete.php?id='".$row["id"]."'>ELIMINA</a>" . "       "; 
    print "<a href=update.php?id='".$row["id"]."'>MODIFICA</a>";

    print "<br> <br>";
    print "------------------------------------------------------------------";


    print "</form >";

}
print "<form action = 'create.php' method='post' >";
print " Prodotto = <input type = 'text' name = 'prodotto' >";
print "<BR> ";
print " Prezzo = <input type = 'number' name = 'prezzo' >";
print "<BR> ";
print " Data Vendita = <input type = 'date' name = 'data' >";
print "<BR> ";
print "<input type = 'submit' value = 'Invia' >";

print "</form >";


?>
</body>
</html>