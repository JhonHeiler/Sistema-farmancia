<?php
require_once("conexion.php");
?>

<?php
$resultado = [];
$error = "";




/*if (
    isset($_POST['tipo_identificacion_id']) == false
    || $_POST['tipo_identificacion_id'] == ""
) {
    $error .= "El tipo de identificación es obligatorio.\n";
}
//VALIDAR NÚMERO DE IDNTIFICACIÓN//
if (
    isset($_POST['numero_identificacion']) == false
    || $_POST['numero_identificacion'] == ""
) {
    $error .= "El número de identificación es obligatorio.\n";
} else {
    $opciones = ["options" => ["regexp" => '/^[0-9]*$/']];
    if (filter_var($_POST['numero_identificacion'], FILTER_VALIDATE_REGEXP, $opciones) === false) {
        $error .= "El número de identificación solo debe tener números.\n";
    }
}
//VALIDAR FECHA DE EXPEDICIÓN//
if (
    isset($_POST['fecha_expedicion']) == false
    || $_POST['fecha_expedicion'] == ""
) {
    $error .= "Fecha de expedicion es obligatoria.\n";
} else {
    $opciones = ["options" => ["regexp" => '/^(\d{4})(\/|-)(0[1-9]|1[0-2])\2([0-2][0-9]|3[0-1])$/']];
    if (filter_var($_POST['fecha_expedicion'], FILTER_VALIDATE_REGEXP, $opciones) === false) {
        $error .= "La fecha de expedicion no cumple los requisitos.\n";
    }
}
//VALIDAR MUNICIPIO DE EXPEDICIÓN//
if (
    isset($_POST['municipio_expedicion']) == false
    || $_POST['municipio_expedicion'] == ""
) {
    $error .= "El municipio de expedicion es obligatorio.\n";
}
//VALIDAR PRIMER NOMBRE//
if (
    isset($_POST['primer_nombre']) == false
    || $_POST['primer_nombre'] == ""
) {
    $error .= "Primer nombre es obligatorio.\n";
} else {
    $opciones = ["options" => ["regexp" => '/^[a-z|A-Z|]*$/']];
    if (filter_var($_POST['primer_nombre'], FILTER_VALIDATE_REGEXP, $opciones) === false) {
        $error .= "Primer nombre solo debe tener letras.\n";
    }
}
//VALIDAR SEGUNDO NOMBRE//
if (
    isset($_POST['segundo_nombre']) == true
    && $_POST['segundo_nombre'] !== ""
) {
    $opciones = ["options" => ["regexp" => '/^[a-z|A-Z]*$/']];
if (filter_var($_POST['segundo_nombre'], FILTER_VALIDATE_REGEXP, $opciones) === false
) {
        $error .= "Segundo nombre solo debe tener letras.\n";
  }
}
//VALIDAR PRIMER APELLIDO//
if (
    isset($_POST['primer_apellido']) == false
    || $_POST['primer_apellido'] == ""
) {
    $error .= "Primer apellido es obligatorio.\n";
} else {
    $opciones = ["options" => ["regexp" => '/^[a-z|A-Z]*$/']];
    if (filter_var($_POST['primer_apellido'], FILTER_VALIDATE_REGEXP, $opciones) === false) {
        $error .= "Primer apellido solo debe tener letras.\n";
    }
}
//VALIDAR SEGUNDO APELLIDO//
if (
    isset($_POST['segundo_apellido']) == true
    && $_POST['segundo_apellido'] !== ""
) {
    $opciones = ["options" => ["regexp" => '/^[a-z|A-Z]*$/']];
if (filter_var($_POST['segundo_apellido'], FILTER_VALIDATE_REGEXP, $opciones) === false
) {
        $error .= "Segundo apellido solo debe tener letras.\n";
  }
}

//VALIDAR FECHA DE NACIMIENTO//
if (
    isset($_POST['fecha_nacimiento']) == false
    || $_POST['fecha_nacimiento'] == ""
) {
    $error .= "Fecha de nacimiento es obligatoria.\n";
} else {
    $opciones = ["options" => ["regexp" => '/^(\d{4})(\/|-)(0[1-9]|1[0-2])\2([0-2][0-9]|3[0-1])$/']];
    if (filter_var($_POST['fecha_nacimiento'], FILTER_VALIDATE_REGEXP, $opciones) === false) {
        $error .= "La fecha de nacimiento no cumple los requisitos.\n";
    }
}

//VALIDAR TIPO DE SEXO//
if (
    isset($_POST['id_sexo']) == false
    || $_POST['id_sexo'] == ""
) {
    $error .= "El tipo de sexo es obligatorio.\n";
}
//VALIDAR MUNICIPIO DE NACIMIENTO//
if (
    isset($_POST['municipio_nacimiento_id']) == false
    || $_POST['municipio_nacimiento_id'] == ""
) {
    $error .= "El municipio de nacimiento es obligatorio.\n";
}
//VALIDAR TIPO DE ESTADO CIVIL//
if (
    isset($_POST['estado_civil_id']) == false
    || $_POST['estado_civil_id'] == ""
) {
    $error .= "El estado civil es obligatorio.\n";
}
//VALIDAR MUNICIPIO DE RESIDENCIA//
if (
    isset($_POST['municipio_residencia_id']) == false
    || $_POST['municipio_residencia_id'] == ""
) {
    $error .= "El municipio de residencia es obligatorio.\n";
}
//VALIDAR TIPO DE ZONA DE RESIDENCIA//
if (
    isset($_POST['zona_id']) == false
    || $_POST['zona_id'] == ""
) {
    $error .= "La zona de residencia es obligatoria.\n";
}
//VALIDAR DIRECCIÓN DE RESIDENCIA//
if (
    isset($_POST['direccion']) == false
    || $_POST['direccion'] == ""
) {
    $error .= "Dirección de residencia es obligatorio.\n";
}
//VALIDAR CORREO PRINCIPAL// Solo acepta el correo si tiene un @ un punto (.) y texto despues del punto
if (
    isset($_POST['correo_principal']) == false
    || $_POST['correo_principal'] == ""
) {
    $error .= "El correo principal es obligatorio.\n";
} else {
    $opciones = ["options" => ["regexp" => '/^(([^<>()\[\]\\.,:\s@"]+(\.[^<>()\[\]\\.,:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/']];
    if (filter_var($_POST['correo_principal'], FILTER_VALIDATE_REGEXP, $opciones) === false) {
        $error .= "PEl correo principal no cumple con los requisitos.\n";
    }
}
//VALIDAR CORREO ALTERNATIVO//
if (
    isset($_POST['correo_alternativo']) == true
    && $_POST['correo_alternativo'] !== ""
) {
    $opciones = ["options" => ["regexp" => '/^(([^<>()\[\]\\.,:\s@"]+(\.[^<>()\[\]\\.,:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/']];
if (filter_var($_POST['correo_alternativo'], FILTER_VALIDATE_REGEXP, $opciones) === false
) {
        $error .= "El correo alternativo no cumple con los requisitos.\n";
  }
}
//VALIDAR CORREO INSTITUCIONAL//
if (
    isset($_POST['correo_institucional']) == true
    && $_POST['correo_institucional'] !== ""
) {
    $opciones = ["options" => ["regexp" => '/^(([^<>()\[\]\\.,:\s@"]+(\.[^<>()\[\]\\.,:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/']];
if (filter_var($_POST['correo_institucional'], FILTER_VALIDATE_REGEXP, $opciones) === false
) {
        $error .= "El correo institucional no cumple con los requisitos.\n";
  }
}
//VALIDAR TELEFONO PRINCIPAL//
if (
    isset($_POST['telefono_principal']) == false
    || $_POST['telefono_principal'] == ""
) {
    $error .= "El teléfono principal es obligatorio.\n";
} else {
    $opciones = ["options" => ["regexp" => '/^[0-9]*$/']];
  if (filter_var($_POST['telefono_principal'], FILTER_VALIDATE_REGEXP, $opciones) === false) {
        $error .= "Teléfono principal solo debe tener números.\n";
  }
}
//VALIDAR TELEFONO ALTERNATIVO//
if (
    isset($_POST['telefono_alternativo']) == true
    && $_POST['telefono_alternativo'] !== ""
) {
    $opciones = ["options" => ["regexp" => '/^[0-9]*$/']];
if (filter_var($_POST['telefono_alternativo'], FILTER_VALIDATE_REGEXP, $opciones) === false
) {
        $error .= "Teléfono alternativo solo debe tener números.\n";
  }
}
//VALIDAR TELEFONO ALTERNATIVO//
if (
    isset($_POST['telefono_alternativo']) == true
    && $_POST['telefono_alternativo'] !== ""
) {
    $opciones = ["options" => ["regexp" => '/^[0-9]*$/']];
if (filter_var($_POST['telefono_alternativo'], FILTER_VALIDATE_REGEXP, $opciones) === false
) {
        $error .= "Teléfono alternativo solo debe tener números.\n";
  }
}
//VALIDAR CLAVE DE SEGURIDAD// Su contraseña debe tener entre 8 y 20 caracteres, al menos una letra mayúscula, una letra minúscula y un número.
if (
    isset($_POST['clave']) == false
    || $_POST['clave'] == ""
) {
    $error .= "La clave es obligatoria.\n";
} else {
    $opciones = ["options" => ["regexp" => '/(?=(.*[0-9]))((?=.*[A-Za-z0-9])(?=.*[A-Z])(?=.*[a-z]))^.{8,20}$/']];
    if (filter_var($_POST['clave'], FILTER_VALIDATE_REGEXP, $opciones) === false) {
        $error .= "La clave no cumple los requisitos.\n";
    }
}
//VALIDAR REPETIR CLAVE DE SEGURIDAD//
if (
    isset($_POST['repetir_clave']) == false
    || $_POST['repetir_clave'] == ""
) {
    $error .= "La clave de verificación es obligatoria.\n";
} else if ($_POST['repetir_clave'] !== $_POST['clave']) {
        $error .= "La clave de verificación no coincide.\n";
}

//MENSAJE DE VALIDACIÓN//
if ($error != "") {
    $resultado['error'] = true;
    $resultado['mensaje'] = $error;
    echo json_encode($resultado);
    exit(0);
}
*/





$modulo=$_POST['modulo'];
$accion=$_POST['accion'];



$inser_sql="insert into modulo_accion(
modulo, accion)	
 
	values
        ('$modulo','$accion')";

	   
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