<?php
require_once("conexion.php");
?>

<?php
$resultado = [];
$error = "";


if (
    isset($_POST['nombre_tipo_identificacion']) == false
    || $_POST['nombre_tipo_identificacion'] == ""
) {
    $error .= "El nombre de tipo de identificación es obligatorio.\n";
} else {
    $opciones = ["options" => ["regexp" => '/^[a-z, |A-Z, |áéíóú, |ÁÉÍÓÚ, ]*$/']];
    if (filter_var($_POST['nombre_tipo_identificacion'], FILTER_VALIDATE_REGEXP, $opciones) === false) {
        $error .= "El nombre de tipo de identificación solo debe tener letras.\n";
    }
}

//MENSAJE DE VALIDACIÓN//
if ($error != "") {
    $resultado['error'] = true;
    $resultado['mensaje'] = $error;
    echo json_encode($resultado);
    exit(0);
}






$nombre_tipo_identificacion=$_POST['nombre_tipo_identificacion'];


$inser_sql="insert into tipo_identificacion(
nombre_tipo_identificacion)	
 
	values
        ('$nombre_tipo_identificacion')";

	   
mysqli_query($conexion, $inser_sql);

//$resultado = array();
// $resultado = [];

if (mysqli_error($conexion) == "") {
    $resultado["error"] = false;
    $resultado["mensaje"] = "Datos agregados con éxito.";
} else {
    $resultado["error"] = true;
    $resultado["mensaje"] =  mysqli_error($conexion);
}
// json_encode convierte el arreglo en formato JSON
echo json_encode($resultado);
        

?>