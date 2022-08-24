<?php
require_once("conexion.php");

?>



<?php
$resultado = [];
$error = "";


if (
    isset($_POST['tipo_sexo']) == false
    || $_POST['tipo_sexo'] == ""
) {
    $error .= "El tipo de sexo es obligatorio.\n";
} else {
    $opciones = ["options" => ["regexp" => '/^[a-z|A-Z]*$/']];
    if (filter_var($_POST['tipo_sexo'], FILTER_VALIDATE_REGEXP, $opciones) === false) {
        $error .= "No se aceptan tíldes o espacios.\n";
    }
}


if ($error != "") {
    $resultado['error'] = true;
    $resultado['mensaje'] = $error;
    echo json_encode($resultado);
    exit(0);
}



$id_sexo=$_POST['id_sexo'];

$tipo_sexo=$_POST['tipo_sexo'];



$inser_sql = "UPDATE sexo SET 
        	
        	tipo_sexo = '$tipo_sexo'        

        WHERE  
            id_sexo='$id_sexo'    
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