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

$id_laboratorio = $_POST['id_laboratorio'];

$sql = "SELECT l.id_laboratorio, p.nombre_producto, p.descripcion, p.fecha, l.nombre_laboratorio from laboratorio as l join producto as p
on l.id_laboratorio = p.id_laboratorio
WHERE l.id_laboratorio = '$id_laboratorio'
";
$rs = mysqli_query($conexion, $sql);

$num = 1;
?>


<table style="font-family:'Times New Roman', Times, serif; font-size:9pt; 
       border-collapse:collapse" cellpadding="2" cellspacing="0">
    <thead>
        <tr style="font-weight:bold; text-align:rigth; background-color:#e1e1e1">
            <th style="width:7mm">No</th>
            <th style="width:35mm">Nombre Producto</th>
            <th style="width:35mm">Descripci��n</th>
            <th style="width:25mm">Fecha</th>
            <th style="width:25mm">Laboratorio</th>
          

           
            
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
            echo "<td style=\"width:35mm;\">$row[nombre_producto]</td>";
            echo "<td style=\"width:35mm;\">$row[descripcion]</td>";
            echo "<td style=\"width:25mm;\">$row[fecha]</td>";
            echo "<td style=\"width:25mm;\">$row[nombre_laboratorio]</td>";
             
 

       
       
            
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