<?php
require_once("conexion.php");
$id_tipo_presentacion = $_POST['id_tipo_presentacion'];
$sql = "DELETE FROM tipo_presentacion WHERE id_tipo_presentacion ='$id_tipo_presentacion'";

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
