<?php 
$db_name='mapa';
$db_host='localhost';
$db_user='root';
$db_password='';

$conexion=mysql_connect($db_host,$db_user,$db_password);
if (!$conexion) {
    die('No se pudo conectar : ' . mysql_error());
}
 mysql_select_db($db_name,$conexion);
 echo "correcto";

?>