<?php
 
require_once("dbconnection.php");
 
$id  = mysqli_real_escape_string($mysqli, $_POST['id']);
$result = mysqli_query($mysqli,"DELETE FROM automoveis WHERE id = $id");

 
echo "<p>Dados APAGADOS com sucesso!!!</p>";

?>