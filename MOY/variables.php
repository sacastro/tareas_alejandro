<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $titulo; ?></title>
</head>

<body>
<h1><?php echo $titulo; ?></h1>
<?php include_once ('menu.php');?>
<h3>PASAR VARIABLE POR GET</h3>

<a href="resultado.php?id=1">Variable por GET</a>

<form action="resultado.php" method="post">
    
	<label for="id">id</label>
    <input type="text" name="id" value="" id="id">
    
    <p><input type="submit" value="Continuar"></p>
 </form>    
</body>
</html>