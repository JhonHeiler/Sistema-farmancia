<?php

require_once("conexion.php");
$id_pedido = $_GET['id_pedido'];
$sql = "SELECT  id_pedido,
                id_persona,
                id_proveedor,
                id_empleado,
                fecha_creacion,
                fecha_vencimiento,
        
                cantidad


                
        FROM pedido 
        WHERE id_pedido='$id_pedido'";

$rs = mysqli_query($conexion,$sql);

$row = mysqli_fetch_assoc($rs);

echo json_encode($row);