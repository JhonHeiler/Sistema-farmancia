<?php
require_once("conexion.php");

?>

<?php
$resultado = [];
$error = "";


if (
    isset($_POST['nombre']) == false
    || $_POST['nombre'] == ""
) {
    $error .= "El nombre del empleado es obligatorio.\n";
} else {
    $opciones = ["options" => ["regexp" => '/^[a-z, |A-Z, |áéíóú, |ÁÉÍÓÚ, ]*$/']];
    if (filter_var($_POST['nombre'], FILTER_VALIDATE_REGEXP, $opciones) === false) {
        $error .= "El nombre del empleado solo debe tener letras.\n";
    }
}

//MENSAJE DE VALIDACIÓN//
if ($error != "") {
    $resultado['error'] = true;
    $resultado['mensaje'] = $error;
    echo json_encode($resultado);
    exit(0);
}



$id_empleado=$_POST['id_empleado'];

$nombre=$_POST['nombre'];



$inser_sql = "UPDATE empleado SET 
        	
        	nombre = '$nombre'        

        WHERE  
            id_empleado='$id_empleado'    
                 ";
mysqli_query($conexion, $inser_sql);
    
//$resultado = array();
$resultado = [];

if (mysqli_error($conexion) == "") {
    $resultado["error"] = false;
    $resultado["mensaje"] = "Datos modificados con éxito.";
} else {
    $resultado["error"] = true;
    $resultado["mensaje"] = mysqli_error($conexion);
}
// json_encode convierte el arreglo en formato JSON
echo json_encode($resultado);