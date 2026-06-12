<?php
 
require_once("dbconnection.php");
 
$marca  = mysqli_real_escape_string($mysqli, $_POST['marca']);
$modelo   = mysqli_real_escape_string($mysqli, $_POST['modelo']);
$matricula = mysqli_real_escape_string($mysqli, $_POST['matricula']);
$ano_fabrica = mysqli_real_escape_string($mysqli, $_POST['ano_fabrica']);
 
$result = mysqli_query($mysqli,"INSERT INTO automoveis (marca, modelo, matricula, ano_fabrica) VALUES ('$marca', '$modelo', '$matricula', '$ano_fabrica')");
 
echo "<p>Dados inseridos com sucesso!!!</p>";
 
?>