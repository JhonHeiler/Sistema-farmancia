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

$sql_cantidad = "SELECT count(*) as cantidad FROM sexo";
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
					<th>Tipo de sexo</th>					
					<th>Acciones</th>
				</tr>
			</thead>

			<tbody>
				<?php 

		  		$num = $inicio+1;

				 $filtros = "";

		        if (isset($_GET['id_sexo']) == true &&  $_GET['id_sexo']  != "") {
		            $filtros .= " AND s.id_sexo = '$_GET[id_sexo]' ";
		        }


		         if (isset($_GET['tipo_sexo']) == true &&  $_GET['tipo_sexo']  != "") {
		             $filtros .= " AND s.tipo_sexo = '$_GET[tipo_sexo]' ";
		         }


					$s= "SELECT 

					s.id_sexo,
                    s.tipo_sexo               
                                     
					FROM sexo s 
					WHERE TRUE $filtros
					LIMIT $inicio, $num_registros";
					$r=mysqli_query($conexion,$s);
					while ($rw=mysqli_fetch_assoc($r)) {

					echo "
					<tr>
						<td>$num</td> 						
						<td>$rw[tipo_sexo]</td>						
												
						
						<td class='acciones'>
	                    <a href='javascript:;' class='mostrar'  onclick='mostrar(\"$rw[id_sexo]\")'>
	                        <i class='fas fa-eye'></i>
	                    </a>
	                    <a href='javascript:;' class='eliminar' onclick='eliminar(\"$rw[id_sexo]\")'>
	                        <i class='fas fa-trash'></i>
	                    </a>
	                    <a href='javascript:;' class='modificar' onclick='modificar(\"$rw[id_sexo]\")'>
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