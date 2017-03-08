<?php 
$db_name='osmexico';
$db_host='localhost';
$db_user='root';
$db_password='';

 $conexion = new mysqli($db_host, $db_user, $db_password, $db_name);
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}
?>