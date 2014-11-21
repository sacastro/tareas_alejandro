<?php

$enlace = mysql_connect('localhost', 'root', 'root');

if (!$enlace){
	die('No es posible establecer la conexión: ' . mysql_error());
}
$bd = mysql_select_db('pruebag', $enlace);

?>
