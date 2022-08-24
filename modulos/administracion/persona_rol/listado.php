<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
	<title>buscar</title>
</head>
	
	<meta name="viewport" content="width=device-width, user-scalable=no, initial.scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="librerias/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="librerias/fontawesome/css/all.min.css">
<body>


		<?php 
			require_once 'conexion.php';
			if(isset($_GET['pagina_actual'])) {
    $pagina = $_GET['pagina_actual'];
} else {
    $pagina=1;
}

if(isset($_GET['num_registros'])) {
    $num_registros = $_GET['num_registros'];
} else {
    $num_registros=5;
}

$sql_cantidad = "SELECT count(*) as cantidad FROM persona_rol";
$rs_cantidad = mysqli_query($conexion,$sql_cantidad);
$row_cantidad = mysqli_fetch_assoc($rs_cantidad);
$cantidad = $row_cantidad['cantidad'];
$num_paginas = ceil ($cantidad/$num_registros);
$inicio = ($pagina-1)*$num_registros;
						
		?>


<div class="container" style="width: 700px">
	<table class="table table-striped table-hover">

		<thead>
			<tr>
				<th>No</th>
				<th>Nombre completo</th>
				<th>Rol</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
		<?php 

$num = $inicio+1;

$filtros = "";

if (isset($_GET['id_persona']) == true &&  $_GET['id_persona']  != "") {
	$filtros .= " AND perso.id_persona = '$_GET[id_persona]' ";
}

if (isset($_GET['id_rol']) == true &&  $_GET['id_rol']  != "") {
	 $filtros .= " AND rol.id_rol = '$_GET[id_rol]' ";
 }

			$mostrar="SELECT 
				perso.id_persona_rol,
				CONCAT_WS(' ', p.nombre
				, p.apellido) AS nombre,
				rol.nombre AS rol
				FROM
				persona_rol  perso
				JOIN
				persona p ON perso.id_persona = p.id_persona
				JOIN
				rol  ON perso.id_rol=rol.id_rol
				WHERE TRUE $filtros
				ORDER BY nombre
				LIMIT  $inicio, $num_registros
				";

			$consultar=mysqli_query($conexion,$mostrar);
			echo mysqli_error($conexion);

			$incr=1;

			while ($recibir=mysqli_fetch_assoc($consultar)) {

				echo "<tr>";
				echo "<td>$incr</td>";
				echo "<td>$recibir[nombre]</td>";
				echo "<td>$recibir[rol]</td>";
				echo "<td class='acciones'>
				<a href='javascript:;' class='mostrar'  onclick='mostrar(\"$recibir[id_persona_rol]\")'>
				<i class='fas fa-eye'></i>
				</a>
				<a href='javascript:;' class='eliminar' onclick='eliminar(\"$recibir[id_persona_rol]\")'>
				<i class='fas fa-trash'></i>
				</a>
				<a href='javascript:;' class='modificar' onclick='modificar(\"$recibir[id_persona_rol]\")'>
				<i class='fas fa-pencil-alt'></i>
				</a>
				</td>";

				echo "</tr>";
				$incr++;
			} 
			?> 
		</tbody>
	</table>
</div>
		
<div class="card-footer">
    <form class="text-center" id="formulario-paginacion">
        <select id="num_registros" name="num_registros" style=" width: 45px;height: 31px;border-color: cornflowerblue;border-radius: 8px;text-align: center;background: #007bffa8;color: white;position: relative;top: 3px;">
            <option value="10">10</option>
            <option value="20">20</option>
            <option value="30">30</option>
            <option value="40">40</option>
            <option value="50">50</option>
            <option value="100">100</option>
        </select>
        
        <button  type="button" class="btn btn-sm btn-primary" style="border-radius:10px" id="btn-inicio"> <i class="fas fa-angle-double-left" style="font-size:20px"></i> </button>
        <button type="button" class="btn btn-sm btn-primary" style="border-radius:10px" id="btn-anterior"> <i class="fas fa-angle-left" style="font-size:20px"></i>  </button>
        
        <input  type="text" value="<?php echo $pagina ?>" id="pagina_actual" name="pagina_actual" style=" width: 45px;height: 31px;border-color: cornflowerblue;border-radius: 8px;text-align: center;background: #007bffa8;color: white;position: relative;top: 3px;"/>
        <b>/</b>
        <input  type="text" value="<?php echo $num_paginas ?>" id="num_paginas"  style=" width: 45px;height: 31px;border-color: cornflowerblue;border-radius: 8px;text-align: center;background: #007bffa8;color: white;position: relative;top: 3px;" disabled />

        <button type="button" class="btn btn-sm btn-primary" style="border-radius:10px" id="btn-siguiente"> <i class="fas fa-angle-right" style="font-size:20px"></i> </button>
        <button type="button" class="btn btn-sm btn-primary" style="border-radius:10px" id="btn-final"> <i class="fas fa-angle-double-right" style="font-size:20px"></i>  </button>
    </form>
</div>
 
 <script type="text/javascript">
        $("#btn-inicio").click(function(){
            $("#pagina_actual").val("1");
            cargar_listado();
        });

        $("#btn-anterior").click(function(){
            $pagina = parseInt($("#pagina_actual").val())-1;
            if($pagina <1) {
                $pagina=1;
            }
            $("#pagina_actual").val($pagina);
            cargar_listado();
        });    

        $("#btn-siguiente").click(function(){
            $pagina = parseInt($("#pagina_actual").val())+1;
 
            if($pagina > parseInt($("#num_paginas").val()) ) {
                $pagina=parseInt($("#num_paginas").val());
            }

            $("#pagina_actual").val($pagina);
            cargar_listado();
        });

        $("#btn-final").click(function(){
            $pagina = parseInt($("#num_paginas").val());
            $("#pagina_actual").val($pagina);
            cargar_listado();
        }); 

        $("#num_registros").val("<?php echo $num_registros ?>");

        $("#num_registros, #pagina_actual").change(function() {
            cargar_listado();
        });
 </script>



	<script src="librerias/jquery/jquery.min.js"></script>
  	<script src="librerias/popper/popper.min.js"></script>
  	<script src="librerias/bootstrap/js/bootstrap.min.js"></script>
	<script src="librerias/fontawesome/js/fontawesome.min.js"></script>
	<script src="librerias/jquery/jquery-3.4.1.min.js"></script>
</body>
</html>