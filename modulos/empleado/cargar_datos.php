<?php
ob_start();
set_time_limit(0); //No limitar el tiempo de ejecución de PHP
ini_set('memory_limit', '-1'); //No liminar la memoría de PHP
?>

<?php

require_once("conexion.php");
$id_empleado = $_GET['id_empleado'];
$sql = "SELECT  id_empleado,
                nombre
        FROM empleado 
        WHERE id_empleado='$id_empleado'";

$rs = mysqli_query($conexion,$sql);

$row = mysqli_fetch_assoc($rs);

echo json_encode($row);