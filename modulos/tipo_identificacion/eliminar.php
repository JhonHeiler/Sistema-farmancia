<?php
require_once("conexion.php");
$tipo_identificacion_id = $_POST['tipo_identificacion_id'];
$sql = "DELETE FROM tipo_identificacion WHERE tipo_identificacion_id ='$tipo_identificacion_id'";

mysqli_query($conexion,$sql);
$resultado=[];
if (mysqli_error($conexion) == "") {
    $resultado["error"] = false;
    $resultado["mensaje"] = "Datos eliminados con éxito.";
} else {
    $resultado["error"] = true;
    $resultado["mensaje"] = mysqli_error($conexion);
}
// json_encode convierte el arreglo en formato JSON
echo json_encode($resultado);
