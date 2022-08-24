<!doctype html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="webfonts/fontawesome-5.10.2/css/all.css" />
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <title>GRUPO 8</title>
    <style type="text/css">

    </style>
</head>

<body>
    <div class="container">
        <?php
        require_once("encabezado.php");
        ?>

        <div class="row" style="border:0px solid silver; padding: 5px; max-width:1000px; margin:auto">
            <ul class="nav nav-tabs">
                <?php
                require_once("menu.php");
                ?>
            </ul>
        </div>


        <div class="row">

            <div class="col-md-12" style="border-radius:0px 0px 60px 0px; box-shadow: 10px 10px 15px #D5DCFF;">
               <?php



                    if ($mod_permitir_acceso == true) {
                        if ($mod_contenido == "") {
                            require_once($mod_ruta_archivo);
                        } else {
                            $sql = "SELECT contenido FROM contenido WHERE modulo='$mod_contenido'";
                            $rs = mysqli_query($conexion, $sql);
                            $row = mysqli_fetch_assoc($rs);
                            echo $row['contenido'];
                      
                        }
                    } else {
                        echo "<div class='acceso-denegado'>Acesso denegado´55!</div> ";
                        echo $_SESSION['usuario'];
                    }
                ?>
        <br>
        <br>
        <br>
            </div>
        </div>

        <?php
        require_once("pie.php");
        ?>
    </div>

</body>

</html>