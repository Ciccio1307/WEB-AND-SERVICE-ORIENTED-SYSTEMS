<?php

if($_SERVER["REQUEST_METHOD"] == "GET")
{
require_once "zconnection.php";

$id = $_GET["id"];

$sql = "SELECT * FROM Citta WHERE id=".$id;
$result = $connection ->query(($sql));
while($row = $result -> fetch_assoc())
{



    print "<form action='zupdate.php' method='post'>";
    print "Nome : <input type = 'text' name='nome' value='".$row["nome"]."'required> ";
    print "prezzo : <input type = 'number' name='prezzo' value='".$row["prezzo"]."'required> ";
    print "FOTOGRAFIA URL  : <input type = 'url' name='foto' value='".$row["foto"]."'required> ";


    print "<input type = 'submit' value='Update' name='action' >";
    print "</form>";
}

}


if($_SERVER["REQUEST_METHOD"] == "POST")
{
require_once "zconnection.php";
$nome = $_POST["nome"];
$prezzo = $_POST["prezzo"];
$foto = $_POST["foto"];
$id = $_POST["id"];

$sql = "UPDATE  Citta  SET nome='$nome' , prezzo= '$prezzo' , foto = '$foto' WHERE id=".$id;
$result = $connection ->query(($sql));
header("location:zread.php");
}

?>