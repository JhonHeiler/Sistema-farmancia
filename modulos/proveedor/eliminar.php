<?php
require_once("conexion.php");
$id_proveedor = $_POST['id_proveedor'];
$sql = "DELETE FROM proveedor WHERE id_proveedor ='$id_proveedor'";

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
