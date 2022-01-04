<div class="d-flex flex-column flex-shrink-0 bg-light" style="width: 4.5rem;" >

  <ul class="nav nav-pills nav-flush flex-column mb-auto text-center"  id="myTab" role="tablist">

    <!-- home -->
    <li class="nav-item">
      <a  class="nav-link active py-3 border-bottom"
      id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
      role="tab" aria-controls="home" aria-selected="true"
      @click="SetTitles('Home')">
      <i class="fas fa-th-large"></i>
    </a>
  </li>
  <!-- end home -->

  <!-- home -->
  <!-- <li class="nav-item">
    <a  class="nav-link active py-3 border-bottom"
    id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
    role="tab" aria-controls="home" aria-selected="true"
    @click="SetTitles('Home')">
    <i class="fas fa-th-large"></i>
  </a>
</li> -->
<!-- end home -->

  <!-- eventos -->
  <li>
    <a href="#" class="nav-link py-3 border-bottom"
    id="eventos-tab" data-bs-toggle="tab" data-bs-target="#eventos"
    role="tab" aria-controls="eventos" aria-selected="true"
    @click="SetTitles('Eventos')">
    <i class="fas fa-calendar-alt"></i>
  </a>
</li>
<!-- end eventos -->

<!--  -->
<li>
  <a href="#" class="nav-link py-3 border-bottom"
  id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
  role="tab" aria-controls="home" aria-selected="true"
  @click="SetTitles('Abonados')"  title="Abonados">
  <i class="far fa-address-card"></i>
</a>
</li>
<!--  -->

<!-- notificaciones -->
<li>
  <a href="#" class="nav-link py-3 border-bottom"
  id="notifiaciones-tab" data-bs-toggle="tab" data-bs-target="#notificaciones"
  role="tab" aria-controls="notificaciones" aria-selected="true"
  @click="SetTitles('Notificaciones')">
  <i class="fas fa-bell"></i>
</a>
</li>
<!-- end notificaciones -->

<!-- configuracion -->
<li>
  <a href="#" class="nav-link py-3 border-bottom"
  id="configuracion-tab" data-bs-toggle="tab" data-bs-target="#configuracion"
  role="tab" aria-controls="configuracion" aria-selected="true"
  @click="SetTitles('Configuracion')">
  <i class="fas fa-cog"></i>
</a>
</li>
<!-- end configuracion -->

</ul>

</div>
