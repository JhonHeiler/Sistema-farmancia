<?php
require_once("conexion.php");

$id_permiso_rol = $_POST['id_permiso_rol'];
$id_rol = $_POST['id_rol'];
$modulo = $_POST['modulo'];
$accion = $_POST['accion'];


if (
    isset($_POST['nombre']) == false
    || $_POST['nombre'] == ""
) { 
    $resultado['error']=true;
    $resultado['mensaje'] = "El primer nombre es un campo obligatorio.";
    echo json_encode($resultado);
    exit();
}else {
    $opciones = ["options" => ["regexp" => '/^[a-zA-ZàèìòùÀÈÌÒÙáéíóúÁÉÍÓÚñÑïöüÏÖÜçÇ]*$/']];
    if (filter_var($_POST['nombre'], FILTER_VALIDATE_REGEXP, $opciones) === false) {

        $resultado['error']=true;
        $resultado['mensaje'] = "El campo nombre solo admite letras.";
        echo json_encode($resultado);
        exit();
    }
}


$sql = "UPDATE persona_rol SET 

id_rol='$id_rol',
modulo='$modulo',
accion='$accion'
WHERE  
id_permiso_rol='$id_permiso_rol'";

$resultado = [];

mysqli_query($conexion, $sql);

if (mysqli_error($conexion) == "") {
    $resultado["error"] = false;
    $resultado["mensaje"] = "Datos agregados con éxito.";
}
else {
    $resultado["error"] = true;
    $resultado["mensaje"] = mysqli_error($conexion);
}


echo json_encode($resultado);

