<?php

require_once("conexion.php");
$id_persona = $_GET['id_persona'];
$sql = "SELECT  id_persona,
                nombre,
                apellido,
                telefono,
                identificacion,
                tipo_identificacion_id,
                id_sexo,
                correo,
                direccion,
                clave
                
        FROM persona 
        WHERE id_persona='$id_persona'";

$rs = mysqli_query($conexion,$sql);

$row = mysqli_fetch_assoc($rs);

echo json_encode($row);