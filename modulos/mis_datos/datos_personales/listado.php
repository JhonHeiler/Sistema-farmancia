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

$sql_cantidad = "SELECT count(*) as cantidad FROM persona";
$rs_cantidad = mysqli_query($conexion,$sql_cantidad);
$row_cantidad = mysqli_fetch_assoc($rs_cantidad);
$cantidad = $row_cantidad['cantidad'];
$num_paginas = ceil ($cantidad/$num_registros);
$inicio = ($pagina-1)*$num_registros;
						
		?>


		<table id="table" class="table table-striped" >
			<thead>
				<tr>
					<th>N.</th>
					<th>Nombre</th>
					<th>Telefono</th>
					<th>Identificacion</th>
					<th>Tipo de identificación</th>
					
					<th>Acciones</th>
				</tr>
			</thead>

			<tbody>
				<?php 

		  		$num = $inicio+1;

				 $filtros = "";

		        if (isset($_GET['id_persona']) == true &&  $_GET['id_persona']  != "") {
		            $filtros .= " AND p.id_persona = '$_GET[id_persona]' ";
		        }


		         if (isset($_GET['nombre']) == true &&  $_GET['nombre']  != "") {
		             $filtros .= " AND p.nombre = '$_GET[nombre]' ";
		         }

		          if (isset($_GET['apellido']) == true &&  $_GET['apellido']  != "") {
		             $filtros .= " AND p.apellido = '$_GET[apellido]' ";
		         }
 				
		         if (isset($_GET['identificacion']) == true &&  $_GET['identificacion']  != "") {
		             $filtros .= " AND p.identificacion = '$_GET[identificacion]' ";
		         }
		     
		      if (isset($_GET['telefono']) == true &&  $_GET['telefono']  != "") {
		             $filtros .= " AND p.telefono = '$_GET[telefono]' ";
		         }

 				if (isset($_GET['tipo_identificacion_id']) == true &&  $_GET['tipo_identificacion_id']  != "") {
		            $filtros .= " AND i.tipo_identificacion_id = '$_GET[tipo_identificacion_id]' ";
		        }

					$s= "SELECT 

					p.id_persona,
                    p.tipo_identificacion_id,
                    p.identificacion,
                    CONCAT_WS(' ', p.nombre, p.apellido) AS nombre,
                    p.telefono,
                    i.nombre_tipo_identificacion AS tipo_identificacion                  
					FROM persona p inner join tipo_identificacion i 
					ON i.tipo_identificacion_id = p.tipo_identificacion_id 
					WHERE TRUE $filtros
					LIMIT $inicio, $num_registros";
					$r=mysqli_query($conexion,$s);
					while ($rw=mysqli_fetch_assoc($r)) {

					echo "
					<tr>
						<td>$num</td> 						
						<td>$rw[nombre]</td>						
						<td>$rw[telefono]</td>
						<td>$rw[identificacion]</td>
						<td>$rw[tipo_identificacion]</td>						
						
						<td class='acciones'>
	                    <a href='javascript:;' class='mostrar'  onclick='mostrar(\"$rw[id_persona]\")'>
	                        <i class='fas fa-eye'></i>
	                    </a>
	                    <a href='javascript:;' class='eliminar' onclick='eliminar(\"$rw[id_persona]\")'>
	                        <i class='fas fa-trash'></i>
	                    </a>
	                    <a href='javascript:;' class='modificar' onclick='modificar(\"$rw[id_persona]\")'>
	                        <i class='fas fa-pencil-alt modificar'></i>
	                    </a>
	                	</td>

					</tr>"; 

					$num++;
					}
				?>
			</tbody>
		</table>
		
<div class="card-footer">
    <form class="text-center" id="formulario-paginacion">
        <select id="num_registros" name="num_registros">
            <option value="10">10</option>
            <option value="20">20</option>
            <option value="30">30</option>
            <option value="40">40</option>
            <option value="50">50</option>
            <option value="100">100</option>
        </select>
        
        <button type="button" class="btn btn-sm btn-secondary" id="btn-inicio"> << </button>
        <button type="button" class="btn btn-sm btn-secondary" id="btn-anterior"> <  </button>
        
        <input  type="text" value="<?php echo $pagina ?>" id="pagina_actual" name="pagina_actual" style="width:40px"/>
        /
        <input  type="text" value="<?php echo $num_paginas ?>" id="num_paginas"  style="width:40px" disabled />

        <button type="button" class="btn btn-sm btn-secondary" id="btn-siguiente"> > </button>
        <button type="button" class="btn btn-sm btn-secondary" id="btn-final"> >>  </button>
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