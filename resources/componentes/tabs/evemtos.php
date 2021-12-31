<div class="tab-content" id="myTabContent">


  <!-- configuracion listado usuario -->
  <div class="tab-pane fade show active" id="listado_eventos" role="tabpanel" aria-labelledby="eventos-tab">

    <!-- importa la tabla de usuarios registrados -->
    <?php
    require_once( '../resources/componentes/tablas/tabla_usuarios.php');
    ?>
    <!-- end import tabla -->

  </div>
  <!-- end listado usuario -->

  <!-- agregar_usuarios  -->
  <div class="tab-pane fade" id="agregar_evento" role="tabpanel" aria-labelledby="agregar-evento-tab">

    <!-- importa la tabla de usuarios registrados -->
    <?php
    require_once( '../resources/componentes/forms/forms_registro_usuario.php');
    ?>
    <!-- end import tabla -->

  </div>
  <!-- end agregar usuarios  -->



</div>
