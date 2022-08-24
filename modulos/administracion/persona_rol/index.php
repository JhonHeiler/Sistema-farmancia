
<!--Formulario Filtros -->

<div id="contenedor-listado" class="container" style="margin-top:15px;width: 800px">

    <div class="card" style=" margin:auto;">

        <div class="card-header">

            Listado de persona por rol 

            <button id="btn-mostrar-filtros" class="btn btn-sm btn-secondary float-right ml-1">Buscar</button>

            <button id="btn-agregar" class="btn btn-sm btn-success float-right ml-1">Agregar</button>
        </div>

        <div id="div-formulario-busqueda" class="card-body d-none">

            <form id="formulario-busqueda" method="post" action="registrar.php">

                <input  type="hidden" class="form-control"  name="id_persona_rol"/><br>


                <div class="form-group row">

                    <label for="id_persona" class="col-sm-3 col-form-label">Persona</label>
                    <div class="col-sm-9">
                        <select class="form-control " name="id_persona">
                            <option value="">(Buscar por persona)</option>
                            <?php
                            $sql2 = "SELECT 
                            id_persona,
                            CONCAT_WS(' ', nombre,apellido) AS nombre
                            FROM persona 
                            ORDER BY nombre";
                            $rs1 = mysqli_query($conexion, $sql2);
                            while ($rw1 = mysqli_fetch_assoc($rs1)) {

                                echo "<option value='$rw1[id_persona]'>$rw1[nombre]</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">

                    <label for="id_rol" class="col-sm-3 col-form-label">Tipo identificación</label>
                    <div class="col-sm-9">
                        <select class="form-control " name="id_rol">
                            <option value="">(Buscar por rol)</option>
                            <?php
                            $sql1 = "SELECT * FROM rol ORDER BY nombre";
                            $rs1 = mysqli_query($conexion, $sql1);
                            while ($rw1 = mysqli_fetch_assoc($rs1)) {

                                echo "<option value='$rw1[id_rol]'>$rw1[nombre]</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>


                <hr/>
                <div class="form-group row mb-0">
                    <div class="col-sm-12 text-right">
                        <button type="button" id="btn-buscar" class="btn btn-sm btn-info">Buscar</button>
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

<!--Fin Formulario Filtros -->

<!-- Formulario -->

<div id="contenedor-formulario" class="container" style="margin-top:15px; display:none">

    <div class="card" style="margin:auto;" id="div.card">
        <div class="card-header bg-warning">
            <span id="titulo"> Nueva persona por rol </span>
        </div>

        <div class="card-body">
            <form id="formulario" method="post" action="agregar.php">

                <input  type="hidden" class="form-control"  name="id_persona_rol" id="id_persona_rol"/><br>

               <div class="form-group row">

                    <label for="id_persona" class="col-sm-3 col-form-label">Persona</label>
                    <div class="col-sm-9">
                        <select class="form-control " name="id_persona" id="id_persona">
                            <option value="">(Persona)</option>
                            <?php
                            $sql1 = "SELECT 
                            id_persona,
                            CONCAT_WS(' ', nombre,apellido) AS nombre
                            FROM persona 
                            ORDER BY nombre";
                            $rs1 = mysqli_query($conexion, $sql1);
                            while ($rw1 = mysqli_fetch_assoc($rs1)) {

                                echo "<option value='$rw1[id_persona]'>$rw1[nombre]</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">

                    <label for="id_rol" class="col-sm-3 col-form-label">Roles</label>
                    <div class="col-sm-9">
                        <select class="form-control " name="id_rol" id="id_rol">
                            <option value="">(Roles)</option>
                            <?php
                            $sql1 = "SELECT * FROM rol ORDER BY nombre";
                            $rs1 = mysqli_query($conexion, $sql1);
                            while ($rw1 = mysqli_fetch_assoc($rs1)) {

                                echo "<option value='$rw1[id_rol]'>$rw1[nombre]</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <hr />
                <div class="form-group row mb-0">
                    <div class="col-sm-12 text-right">
                        <button type="button" id="btn-regresar" class="btn btn-sm btn-light">Regresar</button>
                        <button type="button" id="btn-guardar" class="btn btn-sm btn-primary">Guardar</button>
                        <button type="button" id="btn-modificar" class="btn btn-sm btn-secondary">Modificar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Fin formulario -->
<script type="text/javascript">
    $("#btn-agregar").click(function() {
        $("#titulo").html("Agregar persona_rol");
        $("#contenedor-listado").hide();
        $("#contenedor-formulario").show();

        $("#btn-guardar").show();
        $("#btn-modificar").hide();
            $("#formulario")[0].reset(); //limpiar formulario
            $("#formulario input, #formulario select").prop("disabled", false);

        });

    $("#btn-guardar").click(function() {
        var parametros = $("#formulario").serialize();
        $.post("?modulo=persona_rol&accion=agregar", parametros, function(respuesta) {
                //jQuery.parseJSON convertir la respuesta en JSON en un arreglo asociativo
                var r = jQuery.parseJSON(respuesta);
                alert(r.mensaje);
                if (r.error == false) {
                    $("#contenedor-listado").show();
                    $("#contenedor-formulario").hide();
                    cargar_listado();  
                }

            });
    });

    $("#btn-modificar").click(function() {
        if (confirm("¿Desea modificar el registro?")) {
            var parametros = $("#formulario").serialize();
            $.post("?modulo=persona_rol&accion=modificar", parametros, function(respuesta) {

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

    function mostrar(id_persona_rol) {
        $("#titulo").html("Mostrar persona_rol");
        var parametros = "id_persona_rol=" + id_persona_rol;
        $.get("?modulo=persona_rol&accion=cargar-datos", parametros, function(respuesta) {
            $("#formulario")[0].reset(); 
            $("#contenedor-listado").hide();
            $("#contenedor-formulario").show();

            $("#btn-guardar").hide();
            $("#btn-modificar").hide();

            $("#formulario")[0].reset(); 
            $("#formulario input, #formulario select").prop("disabled", true);


            var r = jQuery.parseJSON(respuesta);

            $("#id_persona_rol").val(r.id_persona_rol);
            $("#id_persona").val(r.id_persona);
            $("#id_rol").val(r.id_rol);



        });
    }

    function eliminar(id_persona_rol) {
        if (confirm("¿Realmente desea eliminar el registro?")) {
            var parametros = "id_persona_rol=" + id_persona_rol;
            $.post("?modulo=persona_rol&accion=eliminar", parametros, function(respuesta) {
                var r = jQuery.parseJSON(respuesta);
                alert(r.mensaje);
                if (r.error == false) {
                    cargar_listado();
                }
            });
        }
    }


    function modificar(id_persona_rol) {
        $("#titulo").html("Modificar persona rol");
        var parametros = "id_persona_rol=" + id_persona_rol;
        $.get("?modulo=persona_rol&accion=cargar-datos", parametros, function(respuesta) {
                $("#formulario")[0].reset(); //limpiar formulario
                $("#contenedor-listado").hide();
                $("#contenedor-formulario").show();

                $("#btn-guardar").hide();
                $("#btn-modificar").show();
                $("#formulario")[0].reset(); //limpiar formulario
                $("#formulario input, #formulario select").prop("disabled", false);
               

                var r = jQuery.parseJSON(respuesta);

                $("#id_persona_rol").val(r.id_persona_rol);
                $("#id_persona").val(r.id_persona);
                $("#id_rol").val(r.id_rol);

            });
    }

    $("#btn-mostrar-filtros").click(function() {
        $("#div-formulario-busqueda").toggleClass("d-none");
    });

    $("#btn-buscar").click(function() {
        cargar_listado();
            //  var parametros = $("#formulario-busqueda").serialize();
            // $("#listado").load("listado.php", parametros);
        });

    function cargar_listado() {
        var parametros = $("#formulario-busqueda").serialize() + "&" + 
            $("#formulario-paginacion").serialize();
        $("#listado").load("?modulo=persona_rol&accion=listar", parametros);
    }
</script>