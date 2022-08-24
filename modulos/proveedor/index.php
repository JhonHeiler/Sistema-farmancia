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
                        <div class="col-sm-12 col-md-4">
                            <label for="nombre">NOMBRE PROVEEDOR *</label>
                        </div>
                        <div class="col-sm-12 col-md-8">
                            <input type="text" name="nombre" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                    </div>

                     <div class="form-group row">
                        <div class="col-sm-12 col-md-4">
                            <label for="apellido">APELLIDO PROVEEDOR *</label>
                        </div>
                        <div class="col-sm-12 col-md-8">
                            <input type="text" name="apellido" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12 col-md-4">
                            <label for="telefono">TELEFONO *</label>
                        </div>
                        <div class="col-sm-12 col-md-8">
                            <input type="text" name="telefono" id="" class="form-control" placeholder="" aria-describedby="helpId">
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
                <h6 >REGISTRAR PROVEEDOR</h6>
            </div>
            <div class="card-body" style="border:0px red solid">
                <form action="guardar.php" method="post" id="formulario" autocomplete="off">
                    <div class="text-center bg-info" style="color:#FFF;">
                        <h6 style="padding:5px">PROVEEDOR</h6>
                    </div>

                    <input type="hidden" name="id_proveedor" id="id_proveedor" />
                 
                    <br>
                  

                    <div class="form-group row">
                        <div class="col-sm-12 col-md-4">
                            <label for="nombre">NOMBRE PROVEEDOR *</label>
                        </div>
                        <div class="col-sm-12 col-md-8">
                            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                    </div>

                     <div class="form-group row">
                        <div class="col-sm-12 col-md-4">
                            <label for="apellido">APELLIDO PROVEEDOR *</label>
                        </div>
                        <div class="col-sm-12 col-md-8">
                            <input type="text" name="apellido" id="apellido" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12 col-md-4">
                            <label for="telefono">TELEFONO *</label>
                        </div>
                        <div class="col-sm-12 col-md-8">
                            <input type="text" name="telefono" id="telefono" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                    </div>


                      <div class="form-group row">
                        <div class="col-sm-12 col-md-4">
                            <label for="correo">CORREO *</label>
                        </div>
                        <div class="col-sm-12 col-md-8">
                            <input type="text" name="correo" id="correo" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                    </div>


                    <div class="form-group row">
                        <div class="col-sm-12 col-md-4">
                            <label for="ciudad">CIUDAD *</label>
                        </div>
                        <div class="col-sm-12 col-md-8">
                            <input type="text" name="ciudad" id="ciudad" class="form-control" placeholder="" aria-describedby="helpId">
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
             $("#correo").prop("readonly", false);

        });

        $("#btn-guardar").click(function() {
            var parametros = $("#formulario").serialize();
            $.post("?modulo=proveedor&accion=agregar", parametros, function(respuesta) {
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
                $.post("?modulo=proveedor&accion=modificar", parametros, function(respuesta) {
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

        function mostrar(id_proveedor) {
            $("#titulo").html("Mostrar persona");
            var parametros = "id_proveedor=" + id_proveedor;
            $.get("?modulo=proveedor&accion=cargar-datos", parametros, function(respuesta) {
                $("#formulario")[0].reset(); //limpiar formulario
                $("#contenedor-listado").hide(); //ocultar
                $("#contenedor-formulario").show(); //mostrar

                $("#btn-guardar").hide(); 
                $("#btn-modificar").hide();
                $("#formulario")[0].reset(); //limpiar formulario
                $("#formulario input, #formulario select").prop("disabled", true);

                var r = jQuery.parseJSON(respuesta);

                $("#id_proveedor").val(r.id_proveedor);
                $("#nombre").val(r.nombre);
                $("#apellido").val(r.apellido);
                $("#telefono").val(r.telefono);
                $("#correo").val(r.correo);
                $("#ciudad").val(r.ciudad);
               
            
            });
        }



        function eliminar(id_proveedor) {
            if (confirm("¿Realmente desea eliminar el registro?")) {
                var parametros = "id_proveedor=" + id_proveedor;
                $.post("?modulo=proveedor&accion=eliminar", parametros, function(respuesta) {
                    var r = jQuery.parseJSON(respuesta);
                    alert(r.mensaje);
                    if (r.error == false) {
                        cargar_listado();
                    }
                });
            }
        }


        function modificar(id_proveedor) {
            $("#titulo").html("Modificar persona");
            var parametros = "id_proveedor=" + id_proveedor;
            $.get("?modulo=proveedor&accion=cargar-datos", parametros, function(respuesta) {
                $("#formulario")[0].reset(); //limpiar formulario
                $("#contenedor-listado").hide(); //ocultar
                $("#contenedor-formulario").show(); //mostrar

                $("#btn-guardar").hide();
                $("#btn-modificar").show();
                $("#formulario")[0].reset(); //limpiar formulario
                $("#formulario input, #formulario select").prop("disabled", false);
                $("#correo").prop("readonly", true);


                var r = jQuery.parseJSON(respuesta);

                $("#id_proveedor").val(r.id_proveedor);
                $("#nombre").val(r.nombre);
                $("#apellido").val(r.apellido);
                $("#telefono").val(r.telefono);
                $("#correo").val(r.correo);
                $("#ciudad").val(r.ciudad);
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
            $("#listado").load("?modulo=proveedor&accion=listar", parametros);
        }
    </script>

    </div>
    <!-- <script src="librerias/bootstrap/js/jquery-3.4.1.slim.js"></script> -->
</body>

</html>