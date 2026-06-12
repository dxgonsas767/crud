<html>
<head>
</head>
<body>
<h1>add.php</h1>
<p>CRUD</p>

<form action="addAction.php" method="post" name="add">
<table width='30%' border='1'>
<tr>
    <td>Marca</td>
    <td><input type="text" name="marca"></td>
</tr>
<tr>
    <td>Modelo</td>
    <td><input type="text" name="modelo"></td>
</tr>
<tr>
    <td>Matricula</td>
    <td><input type="text" name="matricula"></td>
</tr>
<tr>
    <td>Ano Fabrica</td>
    <td><input type="text" name="ano_fabrica"></td>
</tr>
<tr>
    <td><input type="submit" name="submit" value="Inserir BD"></td>
</tr>


</table>
</form>

<a href="Index.php">Index.php</a>
</body>
</html>