<?php
require_once("conexion.php");


$id_modulo_accion=$_POST['id_modulo_accion'];
$modulo=$_POST['modulo'];
$accion=$_POST['accion'];



$inser_sql = "UPDATE modulo_accion SET 
        	
        	modulo = '$modulo',        
			accion = '$accion'
			
        WHERE  
            id_modulo_accion = '$id_modulo_accion'     
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