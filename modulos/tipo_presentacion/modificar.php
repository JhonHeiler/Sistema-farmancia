<?php
require_once("conexion.php");
?>



<?php
$resultado = [];
$error = "";


if (
    isset($_POST['nombre_tipo_presentacion']) == false
    || $_POST['nombre_tipo_presentacion'] == ""
) {
    $error .= "El tipo de presentacion es obligatorio.\n";
} else {
    $opciones = ["options" => ["regexp" => '/^[a-z, |A-Z, |áéíóú, |ÁÉÍÓÚ, ]*$/']];
    if (filter_var($_POST['nombre_tipo_presentacion'], FILTER_VALIDATE_REGEXP, $opciones) === false) {
        $error .= "El tipo de presentacion solo debe tener letras.\n";
    }
}


if ($error != "") {
    $resultado['error'] = true;
    $resultado['mensaje'] = $error;
    echo json_encode($resultado);
    exit(0);
}


$id_tipo_presentacion=$_POST['id_tipo_presentacion'];

$nombre_tipo_presentacion=$_POST['nombre_tipo_presentacion'];




$inser_sql = "UPDATE tipo_presentacion SET 
        	
        	nombre_tipo_presentacion = '$nombre_tipo_presentacion'                  

        WHERE  
            id_tipo_presentacion='$id_tipo_presentacion'    
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