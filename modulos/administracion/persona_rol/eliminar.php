<?php
require_once("conexion.php");
$id_persona_rol = $_POST['id_persona_rol'];
$sql = "DELETE FROM persona_rol WHERE id_persona_rol ='$id_persona_rol'";

mysqli_query($conexion,$sql);
$resultado=[];
if (mysqli_error($conexion) == "") {
    $resultado["error"] = false;
    $resultado["mensaje"] = "Datos eliminados con éxito.";
} else {
    $resultado["error"] = true;
    $resultado["mensaje"] = mysqli_error($conexion);
}

echo json_encode($resultado);
