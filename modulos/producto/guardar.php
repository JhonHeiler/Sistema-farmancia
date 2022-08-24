<?php
require_once("conexion.php");

?>



<?php
$resultado = [];
$error = "";


if (
    isset($_POST['nombre_producto']) == false
    || $_POST['nombre_producto'] == ""
) {
    $error .= "El nombre del producto es obligatorio.\n";
} else {
    $opciones = ["options" => ["regexp" => '/^[a-z, |A-Z, |áéíóú, |ÁÉÍÓÚ, ]*$/']];
    if (filter_var($_POST['nombre_producto'], FILTER_VALIDATE_REGEXP, $opciones) === false) {
        $error .= "El nombre del producto solo debe tener letras.\n";
    }
}




if (
    isset($_POST['descripcion']) == false
    || $_POST['descripcion'] == ""
) {
    $error .= "La descripcion del producto es obligatorio.\n";
} else {
    $opciones = ["options" => ["regexp" => '/^[a-z, |A-Z, |áéíóú, |ÁÉÍÓÚ, |[0-9, ]*$/']];
    if (filter_var($_POST['descripcion'], FILTER_VALIDATE_REGEXP, $opciones) === false) {
        $error .= "La descripcion del producto solo debe tener números y  letras.\n";
    }
}

 
 if (
    isset($_POST['fecha']) == false
    || $_POST['fecha'] == ""
) {
    $error .= "La fecha es obligatoria.\n";
} else {
    $opciones = ["options" => ["regexp" => '/^(\d{4})(\/|-)(0[1-9]|1[0-2])\2([0-2][0-9]|3[0-1])$/']];
    if (filter_var($_POST['fecha'], FILTER_VALIDATE_REGEXP, $opciones) === false) {
        $error .= "La fecha no cumple los requisitos.\n";
    }
}


if (
    isset($_POST['id_laboratorio']) == false
    || $_POST['id_laboratorio'] == ""
) {
    $error .= "El laboratorio es obligatorio.\n";
}


if (
    isset($_POST['lote_producto']) == false
    || $_POST['lote_producto'] == ""
) {
    $error .= "El Lote producto es obligatorio.\n";
} else {
    $opciones = ["options" => ["regexp" => '/^[a-z, |A-Z, |áéíóú, |ÁÉÍÓÚ, |0-9, ]*$/']];
    if (filter_var($_POST['lote_producto'], FILTER_VALIDATE_REGEXP, $opciones) === false) {
        $error .= "El lote producto solo acepta letras y números.\n";
    }
}


if (
    isset($_POST['id_tipo_presentacion']) == false
    || $_POST['id_tipo_presentacion'] == ""
) {
    $error .= "La presentacion es obligatorio.\n";
}

if ($error != "") {
    $resultado['error'] = true;
    $resultado['mensaje'] = $error;
    echo json_encode($resultado);
    exit(0);
}






$nombre_producto=$_POST['nombre_producto'];
$descripcion=$_POST['descripcion'];
$fecha=$_POST['fecha'];
$id_laboratorio=$_POST['id_laboratorio'];
$lote_producto=$_POST['lote_producto'];
$id_tipo_presentacion=$_POST['id_tipo_presentacion'];


$inser_sql="insert into producto(
nombre_producto, 
descripcion,	
fecha,	
id_laboratorio,	
lote_producto,
id_tipo_presentacion)	
 
	values
       
('$nombre_producto',
'$descripcion',
'$fecha',
'$id_laboratorio',
'$lote_producto',
'$id_tipo_presentacion')";

	   
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