<?php 

require_once "connection.php";

$id = $_GET["id"];

$sql = "DELETE FROM books WHERE id=".$id;

$result = $connection ->query($sql);
header("location:read.php ");

?>