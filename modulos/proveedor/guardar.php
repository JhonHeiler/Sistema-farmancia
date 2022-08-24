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
    $error .= "El nombre del proveedor es obligatorio.\n";
} else {
    $opciones = ["options" => ["regexp" => '/^[a-z, |A-Z, |áéíóú, |ÁÉÍÓÚ, ]*$/']];
    if (filter_var($_POST['nombre'], FILTER_VALIDATE_REGEXP, $opciones) === false) {
        $error .= "El nombre del proveedor solo debe tener letras.\n";
    }
}



//APELLIDO BUENO
if (
    isset($_POST['apellido']) == false
    || $_POST['apellido'] == ""
) {
    $error .= "El apellido del proveedor es obligatorio.\n";
} else {
    $opciones = ["options" => ["regexp" => '/^[a-z, |A-Z, |áéíóú, |ÁÉÍÓÚ, ]*$/']];
    if (filter_var($_POST['apellido'], FILTER_VALIDATE_REGEXP, $opciones) === false) {
        $error .= "El apellido del proveedor solo debe tener letras.\n";
    }
}



//TELEFONO
if (
    isset($_POST['telefono']) == false
    || $_POST['telefono'] == ""
) {
    $error .= "El telefono es obligatorio.\n";
} else {
    $opciones = ["options" => ["regexp" => '/^[0-9]*$/']];
    if (filter_var($_POST['telefono'], FILTER_VALIDATE_REGEXP, $opciones) === false) {
        $error .= "El telefono solo debe tener números.\n";
    }
}




//VALIDAR CORREO PRINCIPAL// Solo acepta el correo si tiene un @ un punto (.) y texto despues del punto
if (
    isset($_POST['correo']) == false
    || $_POST['correo'] == ""
) {
    $error .= "El correo es obligatorio.\n";
} else {
    $opciones = ["options" => ["regexp" => '/^(([^<>()\[\]\\.,:\s@"]+(\.[^<>()\[\]\\.,:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/']];
    if (filter_var($_POST['correo'], FILTER_VALIDATE_REGEXP, $opciones) === false) {
        $error .= "PEl correo no cumple con los requisitos.\n";
    }
}



if (
    isset($_POST['ciudad']) == false
    || $_POST['ciudad'] == ""
) {
    $error .= "La ciudad es obligatorio.\n";
} else {
    $opciones = ["options" => ["regexp" => '/^[a-z, |A-Z, |áéíóú, |ÁÉÍÓÚ, ]*$/']];
    if (filter_var($_POST['ciudad'], FILTER_VALIDATE_REGEXP, $opciones) === false) {
        $error .= "La ciudad solo acepta letras y números.\n";
    }
}






//MENSAJE DE VALIDACIÓN//
if ($error != "") {
    $resultado['error'] = true;
    $resultado['mensaje'] = $error;
    echo json_encode($resultado);
    exit(0);
}





$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$ciudad=$_POST['ciudad'];


$inser_sql="insert into proveedor(
nombre, apellido, telefono, correo, ciudad)	
 
	values
        ('$nombre','$apellido','$telefono','$correo','$ciudad')";

	   
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