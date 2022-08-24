 
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
					<th>Empleado</th>
					<th>Proveedor</th>
					<th>Fecha Creación</th>
					<th>Fecha Vencimiento</th>
					<th>Cantidad</th>
					
					<th>Acciones</th>
						</tr>
					</thead>

					<tbody>
						<?php 

						$num = 1;
						
					$s= "SELECT 

					p.id_persona,
					p.id_pedido,
					p.id_empleado,
                    p.id_proveedor,
                    p.fecha_creacion,
                    p.fecha_vencimiento,
                    p.cantidad
                                     
					FROM pedido p 
					WHERE TRUE $filtros
					LIMIT $inicio, $num_registros";
					$r=mysqli_query($conexion,$s);
					while ($rw=mysqli_fetch_assoc($r)) {

							echo "
							<tr>
								<td>$num</td> 
								
						<td>$rw[id_empleado]</td>						
						<td>$rw[id_proveedor]</td>
						<td>$rw[fecha_creacion]</td>
						<td>$rw[fecha_vencimiento]</td>	
						<td>$rw[cantidad]</td>		
								
								<td>
								<div  class='btn-group' role='group'>
									<button type='button' class='btn btn-success' onclick='mostrar(\"$rw[id_pedido]\")'>M</button>
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