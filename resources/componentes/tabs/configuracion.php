<div class="tab-content" id="myTabContent">


  <!-- configuracion listado usuario -->
  <div class="tab-pane fade show active" id="listado_usuarios" role="tabpanel" aria-labelledby="home-tab">

    <!-- importa la tabla de usuarios registrados -->
    <?php
    require_once( '../resources/componentes/tablas/tabla_usuarios.php');
    ?>
    <!-- end import tabla -->

  </div>
  <!-- end listado usuario -->

  <!-- agregar_usuarios  -->
  <div class="tab-pane fade" id="agregar_usuarios" role="tabpanel" aria-labelledby="agregar-usuarios-tab">

    <!-- importa la tabla de usuarios registrados -->
    <?php
    require_once( '../resources/componentes/forms/forms_registro_usuario.php');
    ?>
    <!-- end import tabla -->

  </div>
  <!-- end agregar usuarios  -->

  <!-- agregar perfiles  -->
  <div class="tab-pane fade" id="agregar_perfiles" role="tabpanel" aria-labelledby="agregar-perfiles-tab">

    <!-- importa la tabla de perfiles registrados -->
    <?php
      require_once( '../resources/componentes/forms/forms_registro_perfiles.php');
    ?>
    <!-- end import tabla perfiles -->

  </div>
  <!-- end agregar perfiles -->

  <!-- configuracion listado usuario -->
  <div class="tab-pane fade" id="listado_perfiles" role="tabpanel" aria-labelledby="listado-perfiles-tab">

    <!-- importa la tabla de usuarios registrados -->
    <?php
    require_once( '../resources/componentes/tablas/tabla_perfiles.php');
    ?>
    <!-- end import tabla -->

  </div>
  <!-- end listado usuario -->


</div>
