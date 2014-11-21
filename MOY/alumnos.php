<?php

include_once ('conexion.php');
$titulo = "Alumnos";
$alumnos = mysql_query("SELECT * FROM alumnos");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> <?php echo $titulo; ?> </title>
</head>

<body>
<h1> <?php echo $titulo; ?> </h1>
<?php include_once('menu.php');?>
<table>
<tr>
<th>ID</th>
<th>Nombre</th>
<th>Cuenta</th>
<th>Eliminar</th>
</tr>

<?php
while ($row = mysql_fetch_array($alumnos)) {
    echo "<tr>";
	echo "<td>".$row['id']."</td>";
	echo "<td>".$row['nombre']."</td>";
	echo "<td>".$row['apellido_paterno']."</td>";
	echo "<td>".$row['apellido_materno']."</td>";
	echo "<td>".$row['cuenta']."</td>"; 
	echo "<td><a href='eliminar_alumno.php?id=".$row['id']."'>Eliminar</a></td>";
	echo "</tr>";
}
?>





</body>
</html>
