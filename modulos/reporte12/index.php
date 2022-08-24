<div id="" class="content mt-5 mb-5" style="width:700px; margin:auto; ">

    <div class="card">
        <div class="card-header">
            <h4 id="titulo">Productos por Laboratorios</h4>

        </div>

        <div class="card-body">
            <form id="formulario" method="post" target="_blank" action="?modulo=reporte12&accion=mostrar">

                <div class="form-group row">
                    <label for="id_laboratorio" class="col-sm-3 col-form-label">Laboratorio</label>
                    <div class="col-sm-9">
                        <select class="form-control " id="id_laboratorio" name="id_laboratorio">
                            <option value="">(SELECIONAR NOMBRE LABORATORIO)</option>
                            <?php
                            $sql2 = "SELECT * from laboratorio  group by  nombre_laboratorio";
                            $rs2 = mysqli_query($conexion, $sql2);
                            while ($rw1 = mysqli_fetch_assoc($rs2)) {

                                echo "<option value='$rw1[id_laboratorio]'>$rw1[nombre_laboratorio]</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="clave" class="col-sm-3 col-form-label">Formato</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="formato" name="formato">
                            <option>(Seleccionar formato)</option>
                            <option value="html">Ver en linea</option>
                            <option value="pdf" selected>Archivo PDF</option>
                            <option value="doc">Microsoft Word</option>
                            <option value="xls">Microsoft Excel</option>
                        </select>
                    </div>
                </div>

                <hr />
                <div class="form-group row mb-0">
                    <div class="col-sm-12 text-right">
                        <button type="submit" id="btn-iniciar" class="btn btn-lg btn-block btn-secondary">Mostrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


</div>