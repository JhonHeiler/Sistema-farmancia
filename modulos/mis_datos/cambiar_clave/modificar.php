<div class="container" style="margin-left:70px" > 
<?php

require_once("conexion.php");

$actual_contraseña=$_POST['actual_contraseña'];
$repita_contraseña=$_POST['repita_contraseña'];
$nueva_contraseña=$_POST['nueva_contraseña'];
$identificacion=$_SESSION['id_persona'];

$cla = "SELECT clave FROM `persona` WHERE id_persona = $identificacion ";
$r=mysqli_query($conexion,$cla);
while ($rw=mysqli_fetch_assoc($r)) {
$clave = "$rw[clave]";

}
            

if (isset($_POST['actual_contraseña']) &&  $_POST['actual_contraseña']  != "") {
    if (isset($_POST['nueva_contraseña']) &&  $_POST['nueva_contraseña']  != "") {
        if (isset($_POST['repita_contraseña']) &&  $_POST['repita_contraseña']  != "") {
            if($_POST['actual_contraseña'] == $clave ){
                if($_POST['nueva_contraseña'] == $_POST['repita_contraseña']){
                    $inser_sql = "UPDATE persona 
                    SET clave = '$nueva_contraseña'        
                    WHERE id_persona='$identificacion'    
                    ";
                    mysqli_query($conexion, $inser_sql);
                        
                   
    
                    if (mysqli_error($conexion) == "") {
                    
                        $_SESSION["newsession"] = 1;
                    } else {      
                        
                        $_SESSION["falsession"] = 0;
                    }
                   
                }else{
                }
            }else{
            }     
        }else{
        }
    }else{
    }
}else{
}



?>
</div>
<script type="text/javascript">
window.location="?modulo=cambiar_clave&accion=ver";
</script>

