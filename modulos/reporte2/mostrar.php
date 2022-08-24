<?php
ob_start();
set_time_limit(0); //No limitar el tiempo de ejecución de PHP
ini_set('memory_limit', '-1'); //No liminar la memoría de PHP
?>

<style>
    td,
    th {
        border: 0.2pt solid #ccc;
    }

    h3 {
        margin: 0px;
    }
</style>
 
<?php

$id_tipo_presentacion = $_POST['id_tipo_presentacion'];

$sql = "SELECT concat_ws(' ', proveedor.nombre, proveedor.apellido) as proveedor, empleado.nombre as empleado, pedido.cantidad, pedido_producto.valor_unitario, laboratorio.nombre_laboratorio as laboratorio, pedido.fecha_creacion, pedido.fecha_vencimiento, tipo_presentacion.nombre_tipo_presentacion from producto, tipo_presentacion, proveedor, pedido, pedido_producto, empleado, laboratorio
WHERE proveedor.id_proveedor = pedido.id_proveedor
AND empleado.id_empleado = pedido.id_empleado
AND pedido.id_pedido = pedido_producto.id_pedido
AND laboratorio.id_laboratorio = producto.id_laboratorio
AND tipo_presentacion.id_tipo_presentacion = producto.id_tipo_presentacion and producto.id_tipo_presentacion='$id_tipo_presentacion'
GROUP BY producto.id_producto
";
$rs = mysqli_query($conexion, $sql);

$num = 1;
?>


<table style="font-family:'Times New Roman', Times, serif; font-size:9pt; 
       border-collapse:collapse" cellpadding="2" cellspacing="0">
    <thead>
        <tr style="font-weight:bold; text-align:rigth; background-color:#e1e1e1">
            <th style="width:7mm">No</th>
            <th style="width:35mm">Proveedor</th>
            <th style="width:35mm">Empleado</th>
            <th style="width:16mm">Cantidad</th>
            <th style="width:18mm">Valor U.</th>
            <th style="width:20mm">Laboratorio</th>
            <th style="width:22mm">Fecha creacion</th>
            <th style="width:22mm">Fecha vencimiento</th>
            <th style="width:20mm">Presentacion</th>
           
            
        </tr>
    </thead>

    <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($rs))
             {
            if ($num % 2 == 0) {
                $fondo = "#eee";
            } else {
                $fondo = "#fff";
            }
            echo "<tr style=\"text-align:right; background-color:$fondo\" > ";
            echo "<td style=\"width:7mm;\">$num</td>";
            echo "<td style=\"width:35mm;\">$row[proveedor]</td>";
            echo "<td style=\"width:35mm;\">$row[empleado]</td>";
            echo "<td style=\"width:16mm;\">$row[cantidad]</td>";
              echo "<td style=\"width:18mm;\">$row[valor_unitario]</td>";
             echo "<td style=\"width:20mm;\">$row[laboratorio]</td>";
             echo "<td style=\"width:22mm;\">$row[fecha_creacion]</td>";
              echo "<td style=\"width:22mm;\">$row[fecha_vencimiento]</td>";
              echo "<td style=\"width:20mm;\">$row[nombre_tipo_presentacion]</td>";

       
       
            
            echo "</tr>";
            $num++;
        }
        ?>
    </tbody>
</table>


<?php
        $html = ob_get_clean();
        $formato = $_POST['formato'];

        if ($formato == "html") {
            echo $html;
        } else if ($formato == "doc") {
            header("Content-Type: application/download");
            header("Content-Disposition: attachment; filename=reporte1.doc;");
            echo $html;
 
        } else if ($formato == "xls") {
            header("Content-Type: application/download");
            header("Content-Disposition: attachment; filename=reporte1.xls;");
            echo $html;
        } else if($formato=="pdf") {
            require_once("php/tcpdf/tcpdf.php");
            //Iniciar la clase PDF

            //Orientación del papel (P=Verticial, L=Horizontal)
            //
            $pdf = new TCPDF("P", "mm", "LETTER", true, 'UTF-8', false);

            //Definir los margenes
            //Margin Izquierdo, Superior, Derecho
            $pdf->SetMargins(10, 30, 10);
            //Margen del encabezado
            $pdf->SetHeaderMargin(40);
            //Margen del pie de pagina
            $pdf->SetFooterMargin(40);

            //Margen para el salto de linea. Debe ser mayor que el margen del pie de pagina 
            $pdf->SetAutoPageBreak(TRUE, 50);

            //Tipo y tamaño de letra
            $pdf->SetFont('times', '', 10);

            //Agregar una pagina
            $pdf->AddPage();

            //Poner el contenido HTML generado dentro del archivo PDF
            $pdf->writeHTML($html, true, false, true, false, '');

            //Generar el archivo PDF y mostrarlo en el navegador
            $pdf->Output('reporte1.pdf', 'I');

        }

?>