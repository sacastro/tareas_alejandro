<?php 
$alumnos=mysql_query("SELECT * FROM alumnos");
$titulo= "Insertar alumno";
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $titulo; ?></title>
</head>

<body>
<h1><?php echo $titulo; ?></h1>
<?php include_once ('menu.php');?>

<?php
include_once('conexion.php');

$n = $_POST['nombre'];
$ap = $_POST['apellido_paterno'] ;
$am = $_POST['apellido_materno'];
$e = $_POST['edad'];
$c = $_POST['cuenta'];
$t = $_POST['telefono'];
$d = $_POST['direccion'];

mysql_query("INSERT INTO alumnos(nombre,apellido_paterno,apellido_materno,edad,cuenta,telefono,direccion)
 VALUES('$n', '$ap', '$am', $e ,'$c','$t','$d')");
header('Location:alumnos.php');
?>

</body>
</html>