<?php
require_once("conexion.php");
$id_laboratorio = $_POST['id_laboratorio'];
$sql = "DELETE FROM laboratorio WHERE id_laboratorio ='$id_laboratorio'";

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
