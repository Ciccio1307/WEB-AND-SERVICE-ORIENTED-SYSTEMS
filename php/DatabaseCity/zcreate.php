<?php


require_once "zconnection.php";
$nome = $_GET["nome"];
$prezzo = $_GET["prezzo"];
$foto = $_GET["foto"];

$sql = "INSERT INTO Citta (nome,prezzo,foto) VALUES ('$nome' , '$prezzo' , '$foto' )";
$result = $connection ->query(($sql));
header("location:zread.php");

?>