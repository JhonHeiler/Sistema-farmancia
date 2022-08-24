<?php
$usuario = $_POST['usuario'];
$clave  = $_POST['clave'];
$sql = "SELECT  * FROM persona WHERE identificacion='$usuario'";
$rs = mysqli_query($conexion, $sql);
$respuesta = [];
if ($row = mysqli_fetch_assoc($rs)) {
    //En caso de encontrar el usuario  en la base de datos
    if ($row['clave'] == $clave) {
        // Si la clave de la DB es igual a la que escribio el usuario
        $_SESSION['usuario'] = $usuario;
        $_SESSION['nombre'] = $row['nombre'] . " "  . $row['apellido'];
              $_SESSION['telefono'] = $row['telefono'];
         $_SESSION['identificacion'] = $row['identificacion'];
          $_SESSION['direccion'] = $row['direccion'];
          $_SESSION['correo'] = $row['correo'];
           $_SESSION['clave'] = $row['clave'];
           $_SESSION['tipo_identificacion_id'] = $row['tipo_identificacion_id'];
           $_SESSION['id_sexo'] = $row['id_sexo'];
           $_SESSION['id_persona'] = $row['id_persona'];
           
        
        $respuesta['mensaje'] = "Ok.";
        $respuesta['error'] = false;
    } else {
        // Si la clave que escribio el usuario es diferente a la que hay 
        // en la base de datos
        $respuesta['mensaje'] = "Contraseña incorrecta.";
        $respuesta['error'] = true;
    }
} else {
    //En caso de NO encontrar el usuario  en la base de datos
    $respuesta['mensaje'] = "Usuario no encontrado.";
    $respuesta['error'] = true;
}
echo json_encode($respuesta);
