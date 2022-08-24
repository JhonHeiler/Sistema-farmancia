<?php

require_once("conexion.php");
$id_laboratorio = $_GET['id_laboratorio'];
$sql = "SELECT  id_laboratorio,
                nombre_laboratorio
        FROM laboratorio 
        WHERE id_laboratorio='$id_laboratorio'";

$rs = mysqli_query($conexion,$sql);

$row = mysqli_fetch_assoc($rs);

echo json_encode($row);