<?php
    $id_persona = $_SESSION['id_persona'];;
    $sqln = "SELECT  p.id_persona,
                    p.nombre,
                    p.apellido,
                    p.telefono,
                    p.identificacion,
                    p.tipo_identificacion_id,
                    p.id_sexo,
                    p.correo,
                    p.direccion,
                    p.clave,
                    s.id_sexo,
                    s.tipo_sexo,
                    i.tipo_identificacion_id,
                    i.nombre_tipo_identificacion                   
            FROM sexo s
            inner join persona p 
			ON s.id_sexo = p.id_sexo
            inner join tipo_identificacion i 
			ON i.tipo_identificacion_id = p.tipo_identificacion_id
            WHERE id_persona='$id_persona'";
    
    $rsnn = mysqli_query($conexion,$sqln);
    
    while ($rw1 = mysqli_fetch_assoc($rsnn)) {

         $id_persona = "$rw1[id_persona]";
         $nombre = "$rw1[nombre]";
         $apellido = "$rw1[apellido]";
         $telefono = "$rw1[telefono]";
         $nombre_tipo_identificacion = "$rw1[nombre_tipo_identificacion]";
         $tipo_identificacion_id = "$rw1[tipo_identificacion_id]";
         $tipo_sexo = "$rw1[tipo_sexo]";
         $id_sexo = "$rw1[id_sexo]";
         $correo = "$rw1[correo]";
         $direccion = "$rw1[direccion]";
         $identificacion = "$rw1[identificacion]";
    
    
?>
<br><br>

<div class="card" style="width:750px;margin:auto">
    <div class="card-header text-center">
        <h6 >MIS DATOS</h6>
    </div>
    <div class="card-body" style="border:0px red solid;">
        <form action="?modulo=datos_personales&accion=modificar" method="post" id="formulario" autocomplete="off">


        <div class="text-center bg-info" style="color:#FFF;">
            <h6 style="padding:5px">DATOS PERSONALES</h6>
        </div>
        <input type="hidden" name="id_persona" id="id_persona" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo  $id_persona?>">
        <br>

        <div class="form-group row">
        <div class="col-sm-12 col-md-5">
                <label for="actual_contraseña">TIPO IDENTIFICAION *</label>
            </div>
            <div class="col-sm-12 col-md-7">
            <select class="form-control " required name="tipo_identificacion_id" id="tipo_identificacion_id">
                <option value="<?php echo  $tipo_identificacion_id?>"> <?php echo  $nombre_tipo_identificacion?> </option>
                <?php
                    $sql1 = "SELECT * FROM tipo_identificacion WHERE tipo_identificacion_id != $tipo_identificacion_id ORDER BY nombre_tipo_identificacion";
                    $rs1 = mysqli_query($conexion, $sql1);
                    while ($rw1 = mysqli_fetch_assoc($rs1)) {

                        echo "<option value='$rw1[tipo_identificacion_id]'>$rw1[nombre_tipo_identificacion]</option>";
                    }
                ?>
            </select>
            </div>
            
        </div>
        <div class="form-group row">
            <div class="col-sm-12 col-md-5">
                <label for="actual_contraseña">IDENTIFICACION *</label>
            </div>
            <div class="col-sm-12 col-md-7">
                <input type="text" name="identificacion" id="identificacion" class="form-control" placeholder="" required aria-describedby="helpId" value="<?php echo  $identificacion?>">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12 col-md-5">
                <label for="actual_contraseña">NOMBRES *</label>
            </div>
            <div class="col-sm-12 col-md-7">
                <input type="text" name="nombre" required id="nombre" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo  $nombre?>">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12 col-md-5">
                <label for="repita_contraseña">APELLIDOS *</label>
            </div>
            <div class="col-sm-12 col-md-7">
                <input type="text" name="apellido" required id="apellido" class="form-control" placeholder="" aria-describedby="helpId"value="<?php echo  $apellido?>">
            </div>
        </div>
        <div class="form-group row">
        <div class="col-sm-12 col-md-5">
                <label for="actual_contraseña">SEXO *</label>
            </div>
            <div class="col-sm-12 col-md-7">
            <select class="form-control " required name="id_sexo" id="id_sexo">
                <option value="<?php echo  $id_sexo?>"><?php echo  $tipo_sexo?></option>
                <?php
                    $sql1 = "SELECT * FROM sexo WHERE id_sexo != $id_sexo ORDER BY tipo_sexo";
                    $rs1 = mysqli_query($conexion, $sql1);
                    while ($rw1 = mysqli_fetch_assoc($rs1)) {

                        echo "<option value='$rw1[id_sexo]'>$rw1[tipo_sexo]</option>";
                    }
                ?>
            </select>
            </div>
            
        </div>
        <div class="form-group row">
            <div class="col-sm-12 col-md-5">
                <label for="actual_contraseña">DIRECCION *</label>
            </div>
            <div class="col-sm-12 col-md-7">
                <input type="text" name="direccion" id="direccion" class="form-control" placeholder="" aria-describedby="helpId" required value="<?php echo  $direccion?>">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12 col-md-5">
                <label for="actual_contraseña">TELEFONO *</label>
            </div>
            <div class="col-sm-12 col-md-7">
                <input type="text" name="telefono" id="telefono" class="form-control" placeholder="" aria-describedby="helpId" required value="<?php echo  $telefono?>">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12 col-md-5">
                <label for="nueva_contraseña">CORREO *</label>
            </div>
            <div class="col-sm-12 col-md-7">
                <input type="text" name="correo" id="correo" class="form-control" placeholder="" aria-describedby="helpId" required value="<?php echo  $correo?>">
            </div>
        </div>
        
       

        <button  style="margin-left:600px" type='submit' class='btn badge-info' > Modificar </button>
            
        </form>

    </div>
</div>
<?php
    if(isset($_SESSION["newsession"])){
?>
    <script>
    window.onload = () => {
     alert("Datos actalizado exitosamente.");
    }
    </script>
<?php
    }
    unset($_SESSION["newsession"]);
    if(isset($_SESSION["falsession"])){
?> 
    <script>
    window.onload = () => {
     alert("Los datos no pudieron ser actalizado.");
    }
    </script>
<?php
unset($_SESSION["falsession"]);    
  }
}
?>