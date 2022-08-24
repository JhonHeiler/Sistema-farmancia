<?php
ob_start();
set_time_limit(0); //No limitar el tiempo de ejecuci贸n de PHP
ini_set('memory_limit', '-1'); //No liminar la memor铆a de PHP
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

$id_producto = $_POST['id_producto'];

$sql = "SELECT count(p.nombre_producto) as cantidad FROM producto as p  WHERE p.id_producto = '$id_producto'
";
$rs = mysqli_query($conexion, $sql);

$num = 1;
?>


<table style="font-family:'Times New Roman', Times, serif; font-size:9pt; 
       border-collapse:collapse" cellpadding="2" cellspacing="0">
    <thead>
        <tr style="font-weight:bold; text-align:rigth; background-color:#e1e1e1">
            <th style="width:80mm">No</th>
            <th style="width:90mm">Cantidad Del Producto</th>
 
          

           
            
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
            echo "<td style=\"width:80mm;\">$num</td>";
            echo "<td style=\"width:90mm;\">$row[cantidad]</td>";
  
             
 

       
       
            
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
            require_once("php/reporte.php");
            //Iniciar la clase PDF

            //Orientación del papel (P=Verticial, L=Horizontal)
            //


             $titulo2="<div style=\"text-align:center\"> 
            <b>DROGUERÍA MI NIÑA YUDI</b>
            <br/> 
            NIT: 123456888 <br/>
            TEL: 123455 <br/>
            DIR: barrio santa ana <br/>
            GRUPO 8</div>";





             $titulo="<div style=\"text-align:right\"> 
            <b>REPORTE DE lISTADO PRODUCTOS</b>
            <br/> 
            SEBASTIÁN LASTRE MOSQUERA</div>";



            $pdf = new REPORTE("P", "mm", "LETTER", true, 'UTF-8', false);

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