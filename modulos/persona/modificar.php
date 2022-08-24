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



//APELLIDO BUENO
if (
    isset($_POST['apellido']) == false
    || $_POST['apellido'] == ""
) {
    $error .= "El apellido del empleado es obligatorio.\n";
} else {
    $opciones = ["options" => ["regexp" => '/^[a-z, |A-Z, |áéíóú, |ÁÉÍÓÚ, ]*$/']];
    if (filter_var($_POST['apellido'], FILTER_VALIDATE_REGEXP, $opciones) === false) {
        $error .= "El apellido del empleado solo debe tener letras.\n";
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




if (
    isset($_POST['identificacion']) == false
    || $_POST['identificacion'] == ""
) {
    $error .= "La identificacion es obligatoria.\n";
} else {
    $opciones = ["options" => ["regexp" => '/^[0-9]*$/']];
    if (filter_var($_POST['identificacion'], FILTER_VALIDATE_REGEXP, $opciones) === false) {
        $error .= "El identificacion solo debe tener números.\n";
    }
}

if (
    isset($_POST['tipo_identificacion_id']) == false
    || $_POST['tipo_identificacion_id'] == ""
) {
    $error .= "El tipo de identificacion es obligatorio.\n";
}


if (
    isset($_POST['id_sexo']) == false
    || $_POST['id_sexo'] == ""
) {
    $error .= "El tipo de sexo es obligatorio.\n";
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
    isset($_POST['direccion']) == false
    || $_POST['direccion'] == ""
) {
    $error .= "El direccion es obligatorio.\n";
} else {
    $opciones = ["options" => ["regexp" => '/^[a-z, |A-Z, |áéíóú, |ÁÉÍÓÚ, |0-9, ]*$/']];
    if (filter_var($_POST['direccion'], FILTER_VALIDATE_REGEXP, $opciones) === false) {
        $error .= "El direccion solo acepta letras y números.\n";
    }
}






//MENSAJE DE VALIDACIÓN//
if ($error != "") {
    $resultado['error'] = true;
    $resultado['mensaje'] = $error;
    echo json_encode($resultado);
    exit(0);
}





$id_persona=$_POST['id_persona'];

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];
$identificacion=$_POST['identificacion'];
$tipo_identificacion_id=$_POST['tipo_identificacion_id'];
$id_sexo=$_POST['id_sexo'];
$correo=$_POST['correo'];
$direccion=$_POST['direccion'];
$clave=$_POST['clave'];




$inser_sql = "UPDATE persona SET 
        	
        	nombre = '$nombre',
            apellido = '$apellido', 
            telefono = '$telefono', 
            identificacion = '$identificacion', 
            tipo_identificacion_id = '$tipo_identificacion_id',
             id_sexo = '$id_sexo', 
                            correo = '$correo', 
                                    direccion = '$direccion',
                                            clave = '$clave' 
         

        WHERE  
            id_persona='$id_persona'    
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