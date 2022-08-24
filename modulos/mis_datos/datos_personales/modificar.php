<?php
require_once("conexion.php");



$id_persona=$_POST['id_persona'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];
$identificacion=$_POST['identificacion'];
$tipo_identificacion_id=$_POST['tipo_identificacion_id'];
$id_sexo=$_POST['id_sexo'];
$correo=$_POST['correo'];
$direccion=$_POST['direccion'];




$inser_sql = "UPDATE persona SET 
        	
        	nombre = '$nombre',
            apellido = '$apellido', 
            telefono = '$telefono', 
            identificacion = '$identificacion', 
            tipo_identificacion_id = '$tipo_identificacion_id',
            id_sexo = '$id_sexo', 
            correo = '$correo', 
            direccion = '$direccion'
        WHERE  
            id_persona='$id_persona'    
                 ";
 $hola = mysqli_query($conexion, $inser_sql);
if($hola == 1){
    $_SESSION["newsession"] = 1;
}else{
    $_SESSION["falsession"] = 0;
}

?>
<script type="text/javascript">
window.location="?modulo=datos_personales&accion=ver";
</script>

