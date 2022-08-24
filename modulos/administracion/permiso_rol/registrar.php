<?php
require_once("conexion.php");

$id_rol = $_POST['id_rol'];
$modulo = $_POST['modulo'];
$accion = $_POST['accion'];

if (
    isset($_POST['id_rol']) == false
    || $_POST['id_rol'] == ""
) { 
    $resultado['error']=true;
    $resultado['mensaje'] = "El rol es un campo obligatorio.";
    echo json_encode($resultado);
    exit();
}

if (
    isset($_POST['modulo']) == false
    || $_POST['modulo'] == ""
) { 
    $resultado['error']=true;
    $resultado['mensaje'] = "El modulo es un campo obligatorio.";
    echo json_encode($resultado);
    exit();
}

if (
    isset($_POST['accion']) == false
    || $_POST['accion'] == ""
) { 
    $resultado['error']=true;
    $resultado['mensaje'] = "la accion es un campo obligatorio.";
    echo json_encode($resultado);
    exit();
}

$sql = "INSERT INTO `permiso_rol` (`id_rol`, `modulo`, `accion`) VALUES ('$id_rol', '$modulo', '$accion')";
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

