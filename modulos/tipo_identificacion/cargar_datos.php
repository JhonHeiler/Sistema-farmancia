<?php

require_once("conexion.php");
$tipo_identificacion_id = $_GET['tipo_identificacion_id'];
$sql = "SELECT  tipo_identificacion_id,
                nombre_tipo_identificacion
        FROM tipo_identificacion 
        WHERE tipo_identificacion_id='$tipo_identificacion_id'";

$rs = mysqli_query($conexion,$sql);

$row = mysqli_fetch_assoc($rs);

echo json_encode($row);