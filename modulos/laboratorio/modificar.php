<?php
require_once("conexion.php");

$id_laboratorio=$_POST['id_laboratorio'];

$nombre_laboratorio=$_POST['nombre_laboratorio'];




$inser_sql = "UPDATE laboratorio SET 
        	
        	nombre_laboratorio = '$nombre_laboratorio'                  

        WHERE  
            id_laboratorio='$id_laboratorio'    
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