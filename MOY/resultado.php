<?php 
$alumnos=mysql_query("SELECT * FROM alumnos");
$titulo= "Get y Post";
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
echo "la variable pasada por GET es: " . $_GET['id'] . "<br>";
echo "la variable pasada por POST es: " . $_POST['id'] . "<br>";

?>
</body>
</html>