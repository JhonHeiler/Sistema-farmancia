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
                            <label for="tipo_identificacion_id">TIPO IDENTIFICACIÓN*</label>
                        </div>
                        <div class="col-sm-12 col-md-8">
                            <div class="form-group">
                                <select class="form-control" name="tipo_identificacion_id" id="">
                                    <option value="">Seleccionar tipo de identificación</option>
                                    <?php
                                $consulta1 = "SELECT * FROM tipo_identificacion ORDER BY nombre_tipo_identificacion";
                                $resultado1 = mysqli_query($conexion, $consulta1);
                                while ($rw1 = mysqli_fetch_assoc($resultado1)) {

                                    echo "<option value='$rw1[tipo_identificacion_id]'>$rw1[nombre_tipo_identificacion]</option>";
                                }
                                ?>
                                </select>
                            </div>
                        </div>
                    </div>



                       
                     <div class="form-group row">
                        <div class="col-sm-12 col-md-4">
                            <label for="nombre">NOMBRE *</label>
                        </div>
                        <div class="col-sm-12 col-md-8">
                            <input type="text" name="nombre" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                    </div>

   
                     <div class="form-group row">
                        <div class="col-sm-12 col-md-4">
                            <label for="apellido">APELLIDO *</label>
                        </div>
                        <div class="col-sm-12 col-md-8">
                            <input type="text" name="apellido" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                    </div>

                     <div class="form-group row">
                        <div class="col-sm-12 col-md-4">
                            <label for="telefono">TELEFONO*</label>
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
                <h6 >REGISTRAR PERSONA</h6>
            </div>
            <div class="card-body" style="border:0px red solid">
                <form action="guardar.php" method="post" id="formulario" autocomplete="off">
                    <div class="text-center bg-info" style="color:#FFF;">
                        <h6 style="padding:5px">PERSONA</h6>
                    </div>

                    <input type="hidden" name="id_persona" id="id_persona" />
                 
                    <br>
                  

                    <div class="form-group row">
                        <div class="col-sm-12 col-md-4">
                            <label for="nombre">NOMBRE *</label>
                        </div>
                        <div class="col-sm-12 col-md-8">
                            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12 col-md-4">
                            <label for="apellido">APELLIDO *</label>
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
                        <label for="identificacion" class="col-sm-4 col-form-label">IDENTIFICACION</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="identificacion" name="identificacion" placeholder="Número de identificación">
                        </div>
                    </div>



                <div class="form-group row">
                        <label for="tipo_identificacion_id" class=" col-md-4 col-form-label">TIPO IDENTIFICACIÓN</label>
                        <div class="col-sm-8">
                            <select class="form-control " id="tipo_identificacion_id" name="tipo_identificacion_id">
                                <option value="">(Seleccionar tipo de identificación)</option>
                                <?php
                                $sql1 = "SELECT * FROM tipo_identificacion ORDER BY nombre_tipo_identificacion";
                                $rs1 = mysqli_query($conexion, $sql1);
                                while ($rw1 = mysqli_fetch_assoc($rs1)) {

                                    echo "<option value='$rw1[tipo_identificacion_id]'>$rw1[nombre_tipo_identificacion]</option>";
                                }
                                ?>
                            </select>
                        </div>
                 </div>

                  <div class="form-group row">
                        <label for="id_sexo" class=" col-md-4 col-form-label">TIPO SEXO</label>
                        <div class="col-sm-8">
                            <select class="form-control " id="id_sexo" name="id_sexo">
                                <option value="">(Seleccionar tipo de sexo)</option>
                                <?php
                                $sql1 = "SELECT * FROM sexo ORDER BY tipo_sexo";
                                $rs1 = mysqli_query($conexion, $sql1);
                                while ($rw1 = mysqli_fetch_assoc($rs1)) {

                                    echo "<option value='$rw1[id_sexo]'>$rw1[tipo_sexo]</option>";
                                }
                                ?>
                            </select>
                        </div>
                 </div>



                   <div class="form-group row">
                        <label for="correo" class="col-sm-4 col-form-label">CORREO</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="correo" name="correo">
                        </div>
                    </div>


                       <div class="form-group row">
                        <label for="direccion" class="col-sm-4 col-form-label">DIRECCION</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="direccion" name="direccion">
                        </div>
                    </div>


                       <div class="form-group row">
                        <label for="clave" class="col-sm-4 col-form-label">CLAVE</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" id="clave" name="clave">
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
            $.post("?modulo=persona&accion=agregar", parametros, function(respuesta) {
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
                $.post("?modulo=persona&accion=modificar", parametros, function(respuesta) {
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

        function mostrar(id_persona) {
            $("#titulo").html("Mostrar persona");
            var parametros = "id_persona=" + id_persona;
            $.get("?modulo=persona&accion=cargar-datos", parametros, function(respuesta) {
                $("#formulario")[0].reset(); //limpiar formulario
                $("#contenedor-listado").hide(); //ocultar
                $("#contenedor-formulario").show(); //mostrar

                $("#btn-guardar").hide(); 
                $("#btn-modificar").hide();
                $("#formulario")[0].reset(); //limpiar formulario
                $("#formulario input, #formulario select").prop("disabled", true);

                var r = jQuery.parseJSON(respuesta);

                $("#id_persona").val(r.id_persona);
                $("#nombre").val(r.nombre);
                $("#apellido").val(r.apellido);
                $("#telefono").val(r.telefono);
                $("#identificacion").val(r.identificacion);
                $("#tipo_identificacion_id").val(r.tipo_identificacion_id);
                $("#id_sexo").val(r.id_sexo);
                $("#correo").val(r.correo);
                $("#direccion").val(r.direccion);
                $("#clave").val(r.clave);
            
            });
        }



        function eliminar(id_persona) {
            if (confirm("¿Realmente desea eliminar el registro?")) {
                var parametros = "id_persona=" + id_persona;
                $.post("?modulo=persona&accion=eliminar", parametros, function(respuesta) {
                    var r = jQuery.parseJSON(respuesta);
                    alert(r.mensaje);
                    if (r.error == false) {
                       cargar_listado();
                    }
                });
            }
        }


        function modificar(id_persona) {
            $("#titulo").html("Modificar persona");
            var parametros = "id_persona=" + id_persona;
            $.get("?modulo=persona&accion=cargar-datos", parametros, function(respuesta) {
                $("#formulario")[0].reset(); //limpiar formulario
                $("#contenedor-listado").hide(); //ocultar
                $("#contenedor-formulario").show(); //mostrar

                $("#btn-guardar").hide();
                $("#btn-modificar").show();
                $("#formulario")[0].reset(); //limpiar formulario
                $("#formulario input, #formulario select").prop("disabled", false);
                $("#clave").prop("readonly", true);


                var r = jQuery.parseJSON(respuesta);

                 $("#id_persona").val(r.id_persona);
                $("#nombre").val(r.nombre);
                $("#apellido").val(r.apellido);
                $("#telefono").val(r.telefono);
                $("#identificacion").val(r.identificacion);
                $("#tipo_identificacion_id").val(r.tipo_identificacion_id);
                $("#id_sexo").val(r.id_sexo);
                $("#correo").val(r.correo);
                $("#direccion").val(r.direccion);
                $("#clave").val(r.clave);


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
            $("#listado").load("?modulo=persona&accion=listar", parametros);
        }
    </script>

    </div>
    <!-- <script src="librerias/bootstrap/js/jquery-3.4.1.slim.js"></script> -->
</body>

</html>