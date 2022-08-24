<?php
require_once("conexion.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" charset="utf-8">
    <link rel="stylesheet" href="librerias/bootstrap/css/bootstrap.min.css">

    <style type="text/css">
        .acciones a {
            display: inline-block;
            margin-right: 5px;
            color: gray;
        }

        /*
        .acciones a:hover {
          
            color:red ;
        }
    */

    .acciones a.eliminar  {
            color: red !important;
        }
        .acciones a.eliminar:hover {
            color: gray !important;
        }

        .acciones a.modificar:hover {
            color: green !important;
        }

        .acciones a.mostrar:hover {
            color: blue !important;
        }
    </style>
</head>

<body>

    <div id="contenedor-listado" class="container col-sm-10 mt-5">
        <div class="card">
            <div class="card-header">

               <b>Tabla de registro</b>
               <button id="btn-mostrar-filtros" class="btn btn-sm btn-secondary float-right ml-1">Buscar</button>
                <button type="button" id="btn-agregar" class="btn btn-sm btn btn-secondary  float-right ml-1">Agregar</button>            

            </div>

            <div id="div-formulario-busqueda" class="card-body d-none">
               <form action="guardar.php" method="post" id="formulario-busqueda" autocomplete="off">
                    <div class="text-center bg-info" style="color:#FFF;">
                        <h6 style="padding:5px">BÚSQUEDA DE REGISTRO</h6>
                    </div>

                    <br>
                   

                     <div class="form-group row">
                        <label for="id_empleado" class=" col-md-4 col-form-label">EMPLEADO</label>
                        <div class="col-sm-8">
                            <select class="form-control " id="" name="id_empleado">
                                <option value="">(Seleccionar Empleado)</option>
                                <?php
                                $sql1 = "SELECT * FROM empleado ORDER BY nombre";
                                $rs1 = mysqli_query($conexion, $sql1);
                                while ($rw1 = mysqli_fetch_assoc($rs1)) {

                                    echo "<option value='$rw1[id_empleado]'>$rw1[nombre]</option>";
                                }
                                ?>
                            </select>
                        </div>
                 </div>                  
                   
                  <div class="form-group row">
                        <label for="id_proveedor" class=" col-md-4 col-form-label">PROVEEDOR</label>
                        <div class="col-sm-8">
                            <select class="form-control " id="" name="id_proveedor">
                                <option value="">(Seleccionar Proveedor)</option>
                                <?php
                                $sql1 = "SELECT p.id_proveedor, concat_ws(' ', p.nombre, p.apellido) as nombre FROM proveedor p ORDER BY nombre";
                                $rs1 = mysqli_query($conexion, $sql1);
                                while ($rw1 = mysqli_fetch_assoc($rs1)) {

                                    echo "<option value='$rw1[id_proveedor]'>$rw1[nombre]</option>";
                                }
                                ?>
                            </select>
                        </div>
                 </div>

                   
                    <div class="form-group row mb-0">
                        <div class="col-sm-12 text-right">
                            <button type="button" id="btn-buscar" class="btn btn-sm btn-secondary">Buscar</button>
                        </div>
                    </div>

                    
                </form>
            </div>
          


            <div id="listado">
                <?php 
                require_once("listado.php");
                 ?>
            </div>
        </div>
    </div>





    <div class="container" style="border:0px red solid;margin:20px auto; display: none;" id="contenedor-formulario">
        <div class="card" style="width:750px;margin:auto">
            <div class="card-header text-center">
                <h6 >REGISTRAR PEDIDO</h6>
            </div>
            <div class="card-body" style="border:0px red solid">
                <form action="guardar.php" method="post" id="formulario" autocomplete="off">
                    <div class="text-center bg-info" style="color:#FFF;">
                        <h6 style="padding:5px">PEDIDO</h6>
                    </div>

                    <input type="hidden" name="id_pedido" id="id_pedido" />
                    <input type="hidden" name="id_persona" id="id_persona" />
                 
                    <br>
  

                 <div class="form-group row">
                        <label for="id_empleado" class=" col-md-4 col-form-label">EMPLEADO</label>
                        <div class="col-sm-8">
                            <select class="form-control " id="id_empleado" name="id_empleado">
                                <option value="">(Seleccionar empleado)</option>
                                <?php
                                $sql1 = "SELECT * FROM empleado ORDER BY nombre";
                                $rs1 = mysqli_query($conexion, $sql1);
                                while ($rw1 = mysqli_fetch_assoc($rs1)) {

                                    echo "<option value='$rw1[id_empleado]'>$rw1[nombre]</option>";
                                }
                                ?>
                            </select>
                        </div>
                 </div>                  
                   
                  <div class="form-group row">
                        <label for="id_proveedor" class=" col-md-4 col-form-label">PROVEEDOR</label>
                        <div class="col-sm-8">
                            <select class="form-control " id="id_proveedor" name="id_proveedor">
                                <option value="">(Seleccionar proveedor)</option>
                                <?php
                                $sql1 = "SELECT p.id_proveedor, concat_ws(' ', p.nombre, p.apellido) as nombre FROM proveedor p ORDER BY nombre";
                                $rs1 = mysqli_query($conexion, $sql1);
                                while ($rw1 = mysqli_fetch_assoc($rs1)) {

                                    echo "<option value='$rw1[id_proveedor]'>$rw1[nombre]</option>";
                                }
                                ?>
                            </select>
                        </div>
                 </div>



                   <div class="form-group row">
                        <label for="fecha_creacion" class="col-sm-4 col-form-label">FECHA DE CREACIÓN</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="fecha_creacion" name="fecha_creacion">
                        </div>
                    </div>


                       <div class="form-group row">
                        <label for="fecha_vencimiento" class="col-sm-4 col-form-label">FECHA DE VENCIMIENTO</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="fecha_vencimiento" name="fecha_vencimiento">
                        </div>
                    </div>


                    


                       <div class="form-group row">
                        <label for="cantidad" class="col-sm-4 col-form-label">CANTIDAD</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="cantidad" name="cantidad">
                        </div>
                    </div>

            </form>
        <div class="card-footer text-right">
            <button type="button" class="btn badge-info" id="btn-regresar">
                Regresar
            </button>
            <button type="button" class="btn badge-info" id="btn-guardar">
                Guardar
            </button>

            <button type="button" id="btn-modificar" class="btn badge-info">
            Modificar
        	</button>

        </div> 

        </div>
    </div>

    <script src="librerias/jquery/jquery-3.4.1.min.js"></script>
    <script src="librerias/popper/popper.min.js"></script>
    <script src="librerias/bootstrap/js/bootstrap.min.js"></script>



        <script type="text/javascript">
        $("#btn-agregar").click(function() {
            $("#contenedor-listado").hide();
            $("#contenedor-formulario").show();

            $("#btn-guardar").show();
            $("#btn-modificar").hide();
            $("#formulario")[0].reset(); //limpiar formulario
            $("#formulario input, #formulario select").prop("disabled", false);

        });

        $("#btn-guardar").click(function() {
            var parametros = $("#formulario").serialize();
            $.post("?modulo=pedido&accion=agregar", parametros, function(respuesta) {
                //jQuery.parseJSON convertir la respuesta en JSON en un arreglo asociativo
                 r= JSON.parse(respuesta);
                // console.log(r);
                    alert(r.mensaje);
                if (r.error == false) {
                    $("#contenedor-listado").show();
                    $("#contenedor-formulario").hide();

                     cargar_listado();
                }

            });

        });

//____________________BOTON MODIFICAR_________________________________

        $("#btn-modificar").click(function() {
            if (confirm("¿Desea modificar el registro?")) {
                var parametros = $("#formulario").serialize();
                $.post("?modulo=pedido&accion=modificar", parametros, function(respuesta) {
                    //jQuery.parseJSON convertir la respuesta en JSON en un arreglo asociativo
                    var r = jQuery.parseJSON(respuesta);
                    alert(r.mensaje);
                    if (r.error == false) {
                        $("#contenedor-listado").show();
                        $("#contenedor-formulario").hide();
                        cargar_listado();
                    }
                });
            }
        });




        $("#btn-regresar").click(function() {
            $("#contenedor-listado").show();
            $("#contenedor-formulario").hide();
        });

        function mostrar(id_pedido) {
            $("#titulo").html("Mostrar persona");
            var parametros = "id_pedido=" + id_pedido;
            $.get("?modulo=pedido&accion=cargar-datos", parametros, function(respuesta) {
                $("#formulario")[0].reset(); //limpiar formulario
                $("#contenedor-listado").hide(); //ocultar
                $("#contenedor-formulario").show(); //mostrar

                $("#btn-guardar").hide(); 
                $("#btn-modificar").hide();
                $("#formulario")[0].reset(); //limpiar formulario
                $("#formulario input, #formulario select").prop("disabled", true);

                var r = jQuery.parseJSON(respuesta);

                $("#id_pedido").val(r.id_pedido);
                $("#id_persona").val(r.id_persona);
                $("#id_empleado").val(r.id_empleado);
                $("#id_proveedor").val(r.id_proveedor);
                $("#fecha_creacion").val(r.fecha_creacion);
                $("#fecha_vencimiento").val(r.fecha_vencimiento);
                $("#cantidad").val(r.cantidad);
               
            
            });
        }



        function eliminar(id_pedido) {
            if (confirm("¿Realmente desea eliminar el registro?")) {
                var parametros = "id_pedido=" + id_pedido;
                $.post("?modulo=pedido&accion=eliminar", parametros, function(respuesta) {
                    var r = jQuery.parseJSON(respuesta);
                    alert(r.mensaje);
                    if (r.error == false) {
                         cargar_listado();
                    }
                });
            }
        }


        function modificar(id_pedido) {
            $("#titulo").html("Modificar persona");
            var parametros = "id_pedido=" + id_pedido;
            $.get("?modulo=pedido&accion=cargar-datos", parametros, function(respuesta) {
                $("#formulario")[0].reset(); //limpiar formulario
                $("#contenedor-listado").hide(); //ocultar
                $("#contenedor-formulario").show(); //mostrar

                $("#btn-guardar").hide();
                $("#btn-modificar").show();
                $("#formulario")[0].reset(); //limpiar formulario
                $("#formulario input, #formulario select").prop("disabled", false);
                $("#numero_identificacion").prop("disabled", true);


                var r = jQuery.parseJSON(respuesta);
   			    $("#id_pedido").val(r.id_pedido);
                $("#id_persona").val(r.id_persona);
                $("#id_empleado").val(r.id_empleado);
                $("#id_proveedor").val(r.id_proveedor);
                $("#fecha_creacion").val(r.fecha_creacion);
                $("#fecha_vencimiento").val(r.fecha_vencimiento);
                $("#cantidad").val(r.cantidad);
               
              


            });
        }


        function predecir(){
            cargar_listado();
        }

        $("#btn-mostrar-filtros").click(function() {
        $("#div-formulario-busqueda").toggleClass("d-none");
        });

        $("#btn-buscar").click(function() {
            cargar_listado();
        });

         function cargar_listado() {
            var parametros = $("#formulario-busqueda").serialize() + "&" + 
            $("#formulario-paginacion").serialize();
            $("#listado").load("?modulo=pedido&accion=listar", parametros);
        }
    </script>

    </div>
    <!-- <script src="librerias/bootstrap/js/jquery-3.4.1.slim.js"></script> -->
</body>

</html>