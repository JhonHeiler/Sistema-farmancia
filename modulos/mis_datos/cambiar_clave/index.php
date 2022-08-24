<br><br>
<div class="card" style="width:750px;margin:auto">
    <div class="card-header text-center">
        <h6 >CAMBIAR CONTRASEÑA</h6>
    </div>
    <div class="card-body" style="border:0px red solid">
        <form action="?modulo=cambiar_clave&accion=modificar" method="post" id="formulario" autocomplete="off">
        <div class="text-center bg-info" style="color:#FFF;">
            <h6 style="padding:5px">ROL</h6>
        </div>

        <br>

        <div class="form-group row">
            <div class="col-sm-12 col-md-5">
                <label for="actual_contraseña">CONTRASEÑA ACTUAL *</label>
            </div>
            <div class="col-sm-12 col-md-7">
                <input type="text" name="actual_contraseña" required id="actual_contraseña" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12 col-md-5">
                <label for="nueva_contraseña">NUEVA CONTRASEÑA *</label>
            </div>
            <div class="col-sm-12 col-md-7">
                <input type="text" name="nueva_contraseña" id="nueva_contraseña" class="form-control" placeholder="" required aria-describedby="helpId">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12 col-md-5">
                <label for="repita_contraseña">REPETIR  CONTRASEÑA  *</label>
            </div>
            <div class="col-sm-12 col-md-7">
                <input type="text" name="repita_contraseña" id="repita_contraseña" class="form-control" placeholder="" required aria-describedby="helpId">
            </div>
        </div>
       

        <button class="btn badge-info" type="submit">
        Guardar
        </button>

        </form>

    </div>
</div>
<?php
    if(isset($_SESSION["newsession"])){
?>
    <script>
    window.onload = () => {
     alert("Clave cambiada exitosamente.");
    }
    </script>
<?php
    }
    unset($_SESSION["newsession"]);
    if(isset($_SESSION["falsession"])){
?> 
    <script>
    window.onload = () => {
     alert("La clave no pudo ser cambiada.");
    }
    </script>
<?php
unset($_SESSION["falsession"]);    
  }

?>