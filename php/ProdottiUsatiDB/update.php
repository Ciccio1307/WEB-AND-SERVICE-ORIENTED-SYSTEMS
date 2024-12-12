<?php
require_once "connection.php";

if($_SERVER["REQUEST_METHOD"] == "GET")
{
    $id = $_GET["id"];


$sql = "SELECT * FROM Vendite WHERE id=".$id;

$result = $connection ->query($sql);
while($row = $result -> fetch_assoc())
{

    print "<form action = 'update.php' method='post' >";
    print "<input type = 'hidden' name = 'id' value='".$row["id"]."'>";
    print " Prodotto = <input type = 'text' name = 'prodotto' value = ' >".$row["prodotto"]."' required>";
    print "<BR> ";
    print " Prezzo = <input type = 'number' name = 'prezzo' value = ' >".$row["prezzo"]."' required>";
    print "<BR> ";
    print " Prezzo = <input type = 'date' name = 'data' value = ' >".$row["data_vendita"]."' required>";
    print "<BR> ";
    print "<input type = 'submit' value = 'Update' >";
    
    print "</form >";





}




}


if($_SERVER["REQUEST_METHOD"] == "POST")
{

    $id = $_POST["id"];
    $prodotto = $_POST["prodotto"];
$prezzo = $_POST["prezzo"];
$data = $_POST["data"];
$sql = "UPDATE  Vendite SET prodotto='$prodotto'  , prezzo = '$prezzo' , data_vendita='$data'  WHERE id=".$id;

$result = $connection ->query($sql);
header("location:read.php");


}
?>