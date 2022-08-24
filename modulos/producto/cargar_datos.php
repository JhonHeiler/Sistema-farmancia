<?php

require_once("conexion.php");
$id_producto = $_GET['id_producto'];
$sql = "SELECT  id_producto,
                id_pedido,
                nombre_producto,
                descripcion,
                fecha,
                id_laboratorio,
                lote_producto,
                id_tipo_presentacion
                
        FROM producto 
        WHERE id_producto='$id_producto'";

$rs = mysqli_query($conexion,$sql);

$row = mysqli_fetch_assoc($rs);

echo json_encode($row);