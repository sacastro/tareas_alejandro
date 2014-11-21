<?php

include_once ('conexion.php');
$titulo = "Licenciaturas";
$licenciaturas = mysql_query("SELECT * FROM licenciaturas");
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
<?php
while ($row = mysql_fetch_array($licenciaturas)) {
    echo "<p>".$row['nombre']."</p>";  
}
?>





</body>
</html>
