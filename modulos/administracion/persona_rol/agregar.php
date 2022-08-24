<?php
require_once("conexion.php");

$id_persona = $_POST['id_persona'];
$id_rol = $_POST['id_rol'];

if (
    isset($_POST['id_persona']) == false
    || $_POST['id_persona'] == ""
) { 
    $resultado['error']=true;
    $resultado['mensaje'] = "El rol es un campo obligatorio.";
    echo json_encode($resultado);
    exit();
}

if (
    isset($_POST['id_rol']) == false
    || $_POST['id_rol'] == ""
) { 
    $resultado['error']=true;
    $resultado['mensaje'] = "El rol es un campo obligatorio.";
    echo json_encode($resultado);
    exit();
}



$sql = "INSERT INTO persona_rol (

id_persona,
id_rol
) VALUES (                  
'$id_persona',
'$id_rol'
)";
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

