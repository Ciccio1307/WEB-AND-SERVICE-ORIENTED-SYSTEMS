<?php


require_once "zconnection.php";
$id = $_GET["id"];
$sql = "DELETE FROM Citta WHERE id=".$id;
$result = $connection ->query(($sql));
header("location:zread.php");

?>