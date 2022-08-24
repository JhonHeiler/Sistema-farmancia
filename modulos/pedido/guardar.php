<?php
require_once("conexion.php");
?>

<?php
$resultado = [];
$error = "";




if (
    isset($_POST['id_empleado']) == false
    || $_POST['id_empleado'] == ""
) {
    $error .= "El empleado es obligatorio.\n";
}


if (
    isset($_POST['id_proveedor']) == false
    || $_POST['id_proveedor'] == ""
) {
    $error .= "El proveedor es obligatorio.\n";
}
//VALIDAR NÚMERO DE IDNTIFICACIÓN//
if (
    isset($_POST['cantidad']) == false
    || $_POST['cantidad'] == ""
) {
    $error .= "La cantidad es obligatorio.\n";
} else {
    $opciones = ["options" => ["regexp" => '/^[0-9]*$/']];
    if (filter_var($_POST['cantidad'], FILTER_VALIDATE_REGEXP, $opciones) === false) {
        $error .= "La cantidad solo debe tener números.\n";
    }
}
//VALIDAR FECHA DE EXPEDICIÓN//
if (
    isset($_POST['fecha_creacion']) == false
    || $_POST['fecha_creacion'] == ""
) {
    $error .= "Fecha de creacion es obligatoria.\n";
} else {
    $opciones = ["options" => ["regexp" => '/^(\d{4})(\/|-)(0[1-9]|1[0-2])\2([0-2][0-9]|3[0-1])$/']];
    if (filter_var($_POST['fecha_creacion'], FILTER_VALIDATE_REGEXP, $opciones) === false) {
        $error .= "La fecha de creacion no cumple los requisitos.\n";
    }
}





if (
    isset($_POST['fecha_vencimiento']) == false
    || $_POST['fecha_vencimiento'] == ""
) {
    $error .= "Fecha de vencimiento es obligatoria.\n";
} else {
    $opciones = ["options" => ["regexp" => '/^(\d{4})(\/|-)(0[1-9]|1[0-2])\2([0-2][0-9]|3[0-1])$/']];
    if (filter_var($_POST['fecha_vencimiento'], FILTER_VALIDATE_REGEXP, $opciones) === false) {
        $error .= "La fecha de vencimiento no cumple los requisitos.\n";
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
$id_proveedor=$_POST['id_proveedor'];
$fecha_creacion=$_POST['fecha_creacion'];
$fecha_vencimiento=$_POST['fecha_vencimiento'];
$cantidad=$_POST['cantidad'];



$inser_sql="insert into pedido(
id_empleado,
id_proveedor,	
fecha_creacion,	
fecha_vencimiento,	
cantidad	
) 
 
	values
       
('$id_empleado',
'$id_proveedor',
'$fecha_creacion',
'$fecha_vencimiento',
'$cantidad')";

	   
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