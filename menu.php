<hr>

        <li >
            <a class="nav-link active" href="?modulo=inicio&accion=ver">Inicio</a>
        </li>
        <br>

        

        <!-- <li>
            <a class="nav-link" href="?modulo=persona2&accion=ver">Persona 2</a>
        </li> -->

    <!--     <li >
            <a class="nav-link" href="?modulo=municipio&accion=ver">Municipio</a>
        </li>

        <li >
            <a class="nav-link" href="?modulo=municipio&accion=ver">Municipio</a>
        </li> -->

        <?php
        if (isset($_SESSION['usuario']) == true) {
            ?>
            <li >
                <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown"  href="#">Mis datos</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="?modulo=datos_personales&accion=ver">Ver datos personales</a>                    
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="?modulo=cambiar_clave&accion=ver">Cambiar contraseña</a>
                    
                </div>
            </li>
        <?php } ?>




        
        <li >
            <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown"  href="#">Quienes somos</a>

            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="?modulo=mision&accion=ver">Misión</a>
              <a class="dropdown-item" href="?modulo=vision&accion=ver">Visión</a>
              <a class="dropdown-item" href="?modulo=servicio&accion=ver">Servicio</a>
              <a class="dropdown-item" href="?modulo=sede&accion=ver">Sede</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="?modulo=presentacion&accion=ver">Presentación</a>
        </div>
        </li>


        <li >
            <a class="nav-link" href="?modulo=contenido&accion=ver">Contenido</a>
        </li>



        <?php
        if (isset($_SESSION['usuario']) == true) {
            ?>
            <li >
                <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown"  href="#">Persona</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="?modulo=persona&accion=ver">Persona</a>
                    <a class="dropdown-item" href="?modulo=empleado&accion=ver">Empleado</a>
                    <a class="dropdown-item" href="?modulo=modulo_accion&accion=ver">Modulo acción</a>
                    <a class="dropdown-item" href="?modulo=rol&accion=ver">Rol</a>
                    <a class="dropdown-item" href="?modulo=permiso_rol&accion=ver">Permiso rol</a>
                    <a class="dropdown-item" href="?modulo=persona_rol&accion=ver">Persona rol</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="?modulo=sexo&accion=ver">Sexo</a>
                    <a class="dropdown-item" href="?modulo=tipo_identificacion&accion=ver">Tipo de identificación</a>
                </div>
            </li>
        <?php } ?>

        <?php
        if (isset($_SESSION['usuario']) == true) {
            ?>
            <li >
                <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown"  href="#">Pedido</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="?modulo=producto&accion=ver">Producto</a>
                    <a class="dropdown-item" href="?modulo=proveedor&accion=ver">Proveedor</a>
                    <a class="dropdown-item" href="?modulo=laboratorio&accion=ver">Laboratorio</a>
                    <a class="dropdown-item" href="?modulo=pedido&accion=ver">Pedido</a>
                    
                    <div class="dropdown-divider"></div>
                    
                    <a class="dropdown-item" href="?modulo=tipo_presentacion&accion=ver">Tipo de presentación </a>
                    
                </div>
            </li>
        <?php } ?>






        <?php
        if (isset($_SESSION['usuario']) == true) {
            ?>
            <li >
                <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown"  href="#">Reportes</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="?modulo=reporte1&accion=ver">Listado Prod.</a>
                    <a class="dropdown-item" href="?modulo=reporte2&accion=ver">Presentaciones Prod.</a>
                    <a class="dropdown-item" href="?modulo=reporte11&accion=ver">Productos por Nom.</a>
                          <a class="dropdown-item" href="?modulo=reporte15&accion=ver">Cantidad prod por Nom.</a>
                     <a class="dropdown-item" href="?modulo=reporte12&accion=ver">Productos por Labora.</a>
                     <a class="dropdown-item" href="?modulo=reporte14&accion=ver">Cantidad Prod.</a>
                
                     <a class="dropdown-item" href="?modulo=reporte5&accion=ver">Listado Pers.</a>
                     <a class="dropdown-item" href="?modulo=reporte13&accion=ver">Cantidad Pers.</a>
                    <a class="dropdown-item" href="?modulo=reporte3&accion=ver">Personas por Sexo</a>
                     <a class="dropdown-item" href="?modulo=reporte4&accion=ver">Personas por TI</a>
                      <a class="dropdown-item" href="?modulo=reporte6&accion=ver">Proveedores</a>

                       <a class="dropdown-item" href="?modulo=reporte7&accion=ver">Laboratorios</a>



                          <a class="dropdown-item" href="?modulo=reporte9&accion=ver">Presentaciones</a>
                         <a class="dropdown-item" href="?modulo=reporte10&accion=ver">Roles Usuarios</a>
                         <a class="dropdown-item" href="?modulo=reporte8&accion=ver">Roles</a>


                    
                    
                    <div class="dropdown-divider"></div>
                    
                    
                </div>
            </li>
        <?php } ?>




    


        <li >
            <a class="nav-link" href="#"></a>
        </li>

        <?php
        if (isset($_SESSION['usuario']) == false) {
            ?>
            <li>
                <a class="nav-link" href="?modulo=iniciar-sesion&accion=ver">Iniciar sesión</a>
            </li>
        <?php } ?>


        <?php
        if (isset($_SESSION['usuario']) == true) {
            ?>
            <li >
                <a class="nav-link" href="?modulo=cerrar-sesion&accion=cerrar">Salir</a>
            </li>
        <?php } ?>

        <li >
            <a class="nav-link" href="javascript:;">
                <?php
                if (isset($_SESSION['nombre'])) {
                    echo $_SESSION['nombre'];
                }
                ?>
            </a>
        </li>

<hr>