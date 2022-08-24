<?php

require_once("conexion.php");
$id_tipo_presentacion = $_GET['id_tipo_presentacion'];
$sql = "SELECT  id_tipo_presentacion,
                nombre_tipo_presentacion
        FROM tipo_presentacion 
        WHERE id_tipo_presentacion='$id_tipo_presentacion'";

$rs = mysqli_query($conexion,$sql);

$row = mysqli_fetch_assoc($rs);

echo json_encode($row);