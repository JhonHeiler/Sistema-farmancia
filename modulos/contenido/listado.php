<?php
require_once("conexion.php");
if (isset($_GET['pagina_actual'])) {
    $pagina = $_GET['pagina_actual'];
} else {
    $pagina = 1;
}

if (isset($_GET['num_registros'])) {
    $num_registros = $_GET['num_registros'];
} else {
    $num_registros = 10;
}

//Filtros de busqueda
$filtros = "";

 

if (isset($_GET['titulo']) == true &&  $_GET['titulo']  != "") {
    $titulo = $_GET['titulo'];
    $titulo = str_replace(" ", "%", $titulo);
    $filtros .= " AND c.titulo LIKE '%$titulo%' ";
}


$sql = "SELECT 
            contenido_id, modulo, titulo 
            FROM
            contenido c
 
        WHERE TRUE $filtros


                ";

//Paginación

$sql_cantidad = "SELECT COUNT(*) AS cantidad FROM ( $sql ) AS t

";
$rs_cantidad = mysqli_query($conexion, $sql_cantidad);
$row_cantidad = mysqli_fetch_assoc($rs_cantidad);
$cantidad = $row_cantidad['cantidad'];
$num_paginas = ceil($cantidad / $num_registros);
$inicio = ($pagina - 1) * $num_registros;


$sql .= " ORDER BY titulo LIMIT $inicio, $num_registros  ";
?>
<table class="table table-striped">
    <thead>
        <tr>
            <th style="width: 30px;">No</th>
            <th style="width: 200px;">Modulo</th>
            <th style="">Titulo</th>
          
            <th style="width: 100px;">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $num = $inicio + 1;

        $rs = mysqli_query($conexion, $sql);
        while ($row = mysqli_fetch_assoc($rs)) {
            echo "<tr>";
            echo "<td>$num</td>";
            echo "<td>$row[modulo]</td>";
            echo "<td>$row[titulo]</td>";
       
            echo "<td class='acciones'>
                    <a href='javascript:;' class='mostrar'  onclick='mostrar(\"$row[contenido_id]\")'>
                        <i class='fas fa-eye'></i>
                    </a>
                    <a href='javascript:;' class='eliminar' onclick='eliminar(\"$row[contenido_id]\")'>
                        <i class='fas fa-trash'></i>
                    </a>
                    <a href='javascript:;' class='modificar' onclick='modificar(\"$row[contenido_id]\")'>
                        <i class='fas fa-pencil-alt modificar'></i>
                    </a>
                </td>";
            echo "</tr>";
            //$num = $num + 1;
            $num++;
            //$num += 1;
        }
        ?>
    </tbody>
</table>

<?php
/*
for($i=1;$i<=$num_paginas;$i++) {

    echo "<button class='btn btn-sm btn-secondary m-1'>$i</button>";
}*/
?>

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
        
        <?php
                $desde = $inicio + 1;
                $hasta = $inicio+ $num_registros;
                echo "$desde - $hasta de $cantidad";
                ?>
    </form>
</div>

<script type="text/javascript">
    $("#btn-inicio").click(function() {
        $("#pagina_actual").val("1");
        cargar_listado();
    });

    $("#btn-anterior").click(function() {
        $pagina = parseInt($("#pagina_actual").val()) - 1;
        if ($pagina < 1) {
            $pagina = 1;
        }
        $("#pagina_actual").val($pagina);
        cargar_listado();
    });

    $("#btn-siguiente").click(function() {
        $pagina = parseInt($("#pagina_actual").val()) + 1;

        if ($pagina > parseInt($("#num_paginas").val())) {
            $pagina = parseInt($("#num_paginas").val());
        }

        $("#pagina_actual").val($pagina);
        cargar_listado();
    });

    $("#btn-final").click(function() {
        $pagina = parseInt($("#num_paginas").val());
        $("#pagina_actual").val($pagina);
        cargar_listado();
    });

    $("#num_registros").val("<?php echo $num_registros ?>");

    $("#num_registros, #pagina_actual").change(function() {
        cargar_listado();
    });
</script>