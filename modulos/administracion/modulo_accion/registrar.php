<?php
require_once("conexion.php");

$modulo = $_POST['modulo'];
$accion = $_POST['accion'];

if (
	isset($_POST['modulo']) == false
	|| $_POST['modulo'] == ""
) { 
	$resultado['error']=true;
	$resultado['mensaje'] = "El campo modulo es obligatorio.";
	echo json_encode($resultado);
	exit();
}else {
	$opciones = ["options" => ["regexp" => '/^[a-zA-ZàèìòùÀÈÌÒÙáéíóúÁÉÍÓÚñÑïöüÏÖÜçÇ]*$/']];
	if (filter_var($_POST['modulo'], FILTER_VALIDATE_REGEXP, $opciones) === false) {

		$resultado['error']=true;
		$resultado['mensaje'] = "El campo modulo solo admite letras.";
		echo json_encode($resultado);
		exit();
	}
}

if (
	isset($_POST['accion']) == false
	|| $_POST['accion'] == ""
) { 
	$resultado['error']=true;
	$resultado['mensaje'] = "El campo accion es obligatorio.";
	echo json_encode($resultado);
	exit();
}else {
	$opciones = ["options" => ["regexp" => '/^[a-zA-ZàèìòùÀÈÌÒÙáéíóúÁÉÍÓÚñÑïöüÏÖÜçÇ]*$/']];
	if (filter_var($_POST['accion'], FILTER_VALIDATE_REGEXP, $opciones) === false) {

		$resultado['error']=true;
		$resultado['mensaje'] = "El campo accion solo admite letras.";
		echo json_encode($resultado);
		exit();
	}
}


$sql = "INSERT INTO modulo_accion (
modulo,
accion
) VALUES (                  
'$modulo',
'$accion'
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

