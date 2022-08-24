
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

                <input  type="hidden" class="form-control"  name="id_permiso_rol"/><br>


                <div class="form-group row">
                    <label for="id_rol" class="col-sm-3 col-form-label">Roles</label>
                    <div class="col-sm-9">
                        <select class="form-control " name="rol" id="rol">
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

                <div class="form-group row">
                    <label for="modulo" class="col-sm-3 col-form-label">Modulo</label>
                    <div class="col-sm-9">
                        <select class="form-control " name="nombre_modulo" id="nombre_modulo">
                            <option value="">(Modulo)</option>
                            <?php
                            $sql1 = "SELECT d.modulo, d.modulo FROM modulo_accion d GROUP by modulo ORDER by modulo ";
                            $rs1 = mysqli_query($conexion, $sql1);
                            while ($rw1 = mysqli_fetch_assoc($rs1)) {

                                echo "<option value='$rw1[modulo]'>$rw1[modulo]</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="accion" class="col-sm-3 col-form-label">Accion</label>
                    <div class="col-sm-9">
                        <select class="form-control " name="nombre_accion" id="nombre_accion">
                            <option value="">(Accion)</option>
                            <?php
                            $sql1 = "SELECT p.accion, p.accion FROM modulo_accion as p GROUP by accion ";
                            $rs1 = mysqli_query($conexion, $sql1);
                            while ($rw1 = mysqli_fetch_assoc($rs1)) {

                                echo "<option value='$rw1[accion]'>$rw1[accion]</option>";
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
            <form id="formulario" method="post" action="registrar.php">

                <input  type="hidden" class="form-control"  name="id_permiso_rol" id="id_permiso_rol"/><br>


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

                <div class="form-group row">
                    <label for="modulo" class="col-sm-3 col-form-label">Modulo</label>
                    <div class="col-sm-9">
                        <select class="form-control " name="modulo" id="id_permiso_rol1">
                            <option value="">(Modulo)</option>
                            <?php
                            $sql1 = "SELECT d.id_modulo_accion, d.modulo FROM modulo_accion d GROUP by modulo ORDER by modulo ";
                            $rs1 = mysqli_query($conexion, $sql1);
                            while ($rw1 = mysqli_fetch_assoc($rs1)) {

                                echo "<option value='$rw1[modulo]'>$rw1[modulo]</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="accion" class="col-sm-3 col-form-label">Accion</label>
                    <div class="col-sm-9">
                        <select class="form-control " name="accion" id="id_permiso_rol2">
                            <option value="">(Accion)</option>
                            <?php
                            $sql1 = "SELECT p.id_modulo_accion, p.accion FROM modulo_accion as p GROUP by accion ";
                            $rs1 = mysqli_query($conexion, $sql1);
                            while ($rw1 = mysqli_fetch_assoc($rs1)) {

                                echo "<option value='$rw1[accion]'>$rw1[accion]</option>";
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
        $("#titulo").html("Agregar permiso_rol");
        $("#contenedor-listado").hide();
        $("#contenedor-formulario").show();

        $("#btn-guardar").show();
        $("#btn-modificar").hide();
            $("#formulario")[0].reset(); //limpiar formulario
            $("#formulario input, #formulario select").prop("disabled", false);

        });

    $("#btn-guardar").click(function() {
        var parametros = $("#formulario").serialize();
        $.post("?modulo=permiso_rol&accion=agregar", parametros, function(respuesta) {
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
            $.post("?modulo=permiso_rol&accion=modificar", parametros, function(respuesta) {

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

    function mostrar(id_permiso_rol) {
        $("#titulo").html("Mostrar permiso_rol");
        var parametros = "id_permiso_rol=" + id_permiso_rol;
        $.get("?modulo=permiso_rol&accion=cargar-datos", parametros, function(respuesta) {
            $("#formulario")[0].reset(); 
            $("#contenedor-listado").hide();
            $("#contenedor-formulario").show();

            $("#btn-guardar").hide();
            $("#btn-modificar").hide();

            $("#formulario")[0].reset(); 
            $("#formulario input, #formulario select").prop("disabled", true);


            var r = jQuery.parseJSON(respuesta);

            $("#id_permiso_rol").val(r.id_permiso_rol);
            $("#id_rol").val(r.id_rol);
            $("#id_permiso_rol1").val(r.modulo);
            $("#id_permiso_rol2").val(r.accion);
        });
    }

    function eliminar(id_permiso_rol) {
        if (confirm("¿Realmente desea eliminar el registro?")) {
            var parametros = "id_permiso_rol=" + id_permiso_rol;
            $.post("?modulo=permiso_rol&accion=eliminar", parametros, function(respuesta) {
                var r = jQuery.parseJSON(respuesta);
                alert(r.mensaje);
                if (r.error == false) {
                    cargar_listado();
                }
            });
        }
    }


    function modificar(id_permiso_rol) {
        $("#titulo").html("Modificar permiso_rol");
        var parametros = "id_permiso_rol=" + id_permiso_rol;
        $.get("?modulo=permiso_rol&accion=cargar-datos", parametros, function(respuesta) {
                $("#formulario")[0].reset(); 
                $("#contenedor-listado").hide();
                $("#contenedor-formulario").show();

                $("#btn-guardar").hide();
                $("#btn-modificar").show();
                $("#formulario")[0].reset(); 
                $("#formulario input, #formulario select").prop("disabled", false);

                var r = jQuery.parseJSON(respuesta);

                $("#id_permiso_rol").val(r.id_permiso_rol);
                $("#id_rol").val(r.id_rol);
                $("#id_permiso_rol1").val(r.modulo);
                $("#id_permiso_rol2").val(r.accion);
            });
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
        $("#listado").load("?modulo=permiso_rol&accion=listar", parametros);
    }
</script>
 </div>
    <!-- <script src="librerias/bootstrap/js/jquery-3.4.1.slim.js"></script> -->
</body>

</html>