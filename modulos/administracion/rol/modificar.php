<?php
require_once("conexion.php");

$rol=$_POST['id_rol'];

$nombre=$_POST['nombre'];



$inser_sql = "UPDATE rol SET 
        	
        	nombre = '$nombre'        

        WHERE  
            id_rol='$rol'    
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