
<div class="tab-content" id="myTabContent">
    <!-- configuracion listado usuario -->
    <div class="tab-pane fade show active" id="listadoEventos" role="tabpanel" aria-labelledby="listado_eventos">
      <!-- importa la tabla de usuarios registrados -->
      <div class="container">
        <?php
        require_once( '../resources/componentes/tablas/tablas_eventos_registrados.php');
        ?>
      </div>
      <!-- end import tabla -->
    </div>
    <!-- end listado usuario -->
    <!-- agregar_usuarios  -->
    <div class="tab-pane fade" id="agregarEventos" role="tabpanel" aria-labelledby="agregar_eventos">
      <!-- importa la forms de usuarios registrados -->
      <div class="container">
        <?php
        require_once( '../resources/componentes/forms/forms_registro_evento.php');
        ?>
      </div>
      <!-- end import form -->
    </div>
    <!-- end agregar usuarios  -->
    <!-- agrega sector entrada  -->
    <div class="tab-pane fade" id="agregarSectorEntada" role="tabpanel" aria-labelledby="agregar_sector_entradas">
      <!-- importa la tabla de usuarios registrados -->
      <div class="container">
        <?php
        require_once( '../resources/componentes/forms/forms_registro_sector_entrada.php');
        ?>
      </div>
      <!-- end import tabla -->
    </div>
    <!-- end agregar sector entrada  -->
</div>
