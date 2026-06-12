
<?php
require_once("dbconnection.php");
 
$id  = $_GET['id'];
$result = mysqli_query($mysqli,"SELECT * FROM automoveis WHERE id = $id");

$resultaData = mysqli_fetch_assoc($result);

$id = $resultaData['id'];
$marca = $resultaData['marca'];
$modelo = $resultaData['modelo'];
$matricula = $resultaData['matricula'];
$ano_fabrica = $resultaData['ano_fabrica'];


?>

<html>
<head>
</head>
<body>
<h1>edit.php</h1>
<p>CRUD</p>

<form action="editAction.php" method="post" name="edit">
<table width='30%' border='1'>
<tr>
    <td>ID</td>
<td><input type="text" name="id" value="<?php echo $id; ?>"></td>
</tr>
<tr>
    <td>Marca</td>
    <td><input type="text" name="marca" value="<?php echo $marca; ?>"></td>
</tr>
<tr>
    <td>Modelo</td>
    <td><input type="text" name="modelo" value="<?php echo $modelo; ?>"></td>
</tr>
<tr>
    <td>Matricula</td>
    <td><input type="text" name="matricula" value="<?php echo $matricula; ?>"></td>
</tr>
<tr>
    <td>Ano Fabrica</td>
    <td><input type="text" name="ano_fabrica" value="<?php echo $ano_fabrica; ?>"></td>
</tr>
<tr>
    <td><input type="submit" name="update" value="Atualizar BD"></td>
</tr>


</table>
</form>

<a href="Index.php">Index.php</a>
</body>
</html>
