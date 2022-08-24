 
 
 <!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
	<title>buscar</title>
</head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial.scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="librerias/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="librerias/fontawesome/css/all.min.css">
<body>


		<?php 
			require_once 'conexion.php';
						
		?>

				<table class="table table-striped  table-hover" style="width: 700px;margin:auto">
					<thead>
						<tr>
					<th>N.</th>
					<th>Nombre proveedor</th>
					<th>Telefono</th>
					<th>Correo</th>
					<th>Ciudad</th>					
					<th>Acciones</th>
						</tr>
					</thead>

					<tbody>
						<?php 

						$num = 1;
					$s= "SELECT 

					p.id_proveedor,
                    concat_ws(' ',p.nombre, p.apellido) as nombre,
                    p.telefono,
                    p.correo,
                    p.ciudad               
                                     
					FROM proveedor p 
					LIMIT $inicio, $num_registros";
					$r=mysqli_query($conexion,$s);
					while ($rw=mysqli_fetch_assoc($r)) {

							echo "
							<tr>
								<td>$num</td> 								
								<td>$rw[nombre]</td>
								<td>$rw[telefono]</td>
								<td>$rw[correo]</td>
								<td>$rw[ciudad]</td>						
								
								
								<td>
								<div  class='btn-group' role='group'>
									<button type='button' class='btn btn-success' onclick='mostrar(\"$rw[id_proveedor]\")'>M</button>
									<button type='button' class='btn btn-success'>E</button>
									<button type='button' class='btn btn-success'>B</button>

									
								</div>
								</td>
							</tr>
							"; 

							$num++;
							}
						?>
					</tbody>
				</table>
				<div class="card-footer text-right">
					<button type="button" id="btn-agregar" class="btn btn-sm btn btn-secondary">Agregar</button>
				</div>
			
				
		</div>
	</div>
	<script src="librerias/jquery/jquery.min.js"></script>
  	<script src="librerias/popper/popper.min.js"></script>
  	<script src="librerias/bootstrap/js/bootstrap.min.js"></script>
	<script src="librerias/fontawesome/js/fontawesome.min.js"></script>
	<script src="librerias/jquery/jquery-3.4.1.min.js"></script>
</body>
</html>