<?php
 
require_once("dbconnection.php");
 
$id  = $_POST['id'];
$marca  = mysqli_real_escape_string($mysqli, $_POST['marca']);
$modelo   = mysqli_real_escape_string($mysqli, $_POST['modelo']);
$matricula = mysqli_real_escape_string($mysqli, $_POST['matricula']);
$ano_fabrica = mysqli_real_escape_string($mysqli, $_POST['ano_fabrica']);

$result = mysqli_query($mysqli,"UPDATE automoveis SET marca='$marca', modelo='$modelo', matricula='$matricula', ano_fabrica='$ano_fabrica' WHERE id= $id");
 
echo "<p>Dados ATUALIZADOS com sucesso!!!</p>";
 
?>