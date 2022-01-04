<div class="tab-content" id="myTabContent">
      <!-- configuracion listado usuario -->
      <div class="tab-pane fade show active" id="listadoUsuarios" role="tabpanel" aria-labelledby="listado_usuarios_tabs">
        <!-- importa la tabla de usuarios registrados -->
        <div class="container">
          <?php
          require_once( '../resources/componentes/tablas/tabla_usuarios.php');
          ?>
        </div>
        <!-- end import tabla -->
      </div>
      <!-- end listado usuario -->

      <!-- agregar_usuarios  -->
      <div class="tab-pane fade" id="agregarUsuarios" role="tabpanel" aria-labelledby="agregar_usuarios_tabs">
        <!-- importa la tabla de usuarios registrados -->
        <div class="container">
          <?php
          require_once( '../resources/componentes/forms/forms_registro_usuario.php');
          ?>
        </div>
        <!-- end import tabla -->
      </div>
      <!-- end agregar usuarios  -->

      <!-- agregar perfiles  -->
      <div class="tab-pane fade" id="listadoPerfiles" role="tabpanel" aria-labelledby="listado_perfiles_tabs">
        <!-- importa la tabla de perfiles registrados -->
        <div class="container">
          <?php
          require_once( '../resources/componentes/tablas/tabla_perfiles.php');
          ?>
        </div>
        <!-- end import tabla perfiles -->
      </div>
      <!-- end agregar perfiles -->

      <!-- configuracion listado usuario -->
      <div class="tab-pane fade" id="agregarPerfiles" role="tabpanel" aria-labelledby="agregar_perfiles_tabs">
        <!-- importa la tabla de usuarios registrados -->
        <div class="container">
          <?php
          require_once( '../resources/componentes/forms/forms_registro_perfiles.php');
          ?>
        </div>
        <!-- end import tabla -->
      </div>
      <!-- end listado usuario -->

      <!-- configuracion listado usuario -->
      <div class="tab-pane fade" id="agregarEmpresa" role="tabpanel" aria-labelledby="agregar_perfiles_tabs">
        <!-- importa la tabla de usuarios registrados -->
        <div class="container">
          <?php
          require_once( '../resources/componentes/forms/forms_registro_empresa.php');
          ?>
        </div>
        <!-- end import tabla -->
      </div>
      <!-- end listado usuario -->

      <!-- configuracion registro representante -->
      <div class="tab-pane fade" id="agregarRepresentante" role="tabpanel" aria-labelledby="agregar_representante_tabs">
        <!-- importa la tabla de usuarios registrados -->
        <div class="container">
          <?php
          require_once( '../resources/componentes/forms/forms_registro_representante.php');
          ?>
        </div>
        <!-- end import tabla -->
      </div>
      <!-- end listado usuario -->

</div>
