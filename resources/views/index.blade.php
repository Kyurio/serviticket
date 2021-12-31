@extends('layouts.app')



@section('content')

<!-- import navbar -->
@php
include( '../resources/componentes/navbs/navbar.php');
@endphp
<!-- end import navbar -->
<main>


  <div class="row">

    <!-- importa el sidevebar -->
    <section class="col-md-1">
      <!-- sidebar -->
      @php
      include( '../resources/componentes/navbs/sidebar.php');
      @endphp
      <!-- end sidebar -->
    </section>
    <!-- importa el sidevebar -->
    <section class="col-md-11">

      <!-- tabs -->
      <div class="container">





        <!--
        *
        *
        *
        cabeceras
        *
        *
        *
      -->
      <div class="">



        <div v-if="titles ==  'Home' ">
          <!-- titulos -->
          @php
          include( '../resources/componentes/otros/dashboard.php');
          @endphp
          <!-- end titulos -->
        </div>

        <div v-else-if="titles == 'Eventos' ">
          <!-- titulos -->
          <div class="card mt-5 py-3">
            <div class="card-body">

              <div class="d-flex bd-highlight">

                <!-- rirulo -->
                <div class="p-2 flex-grow-1 bd-highlight">
                  @{{ titles }}
                </div>
                <!-- end titulo -->

                <!-- opciones -->
                <div class="p-2 bd-highlight ">
                  <div v-if="titles == 'Configuracion' ">
                    @php
                    require_once( '../resources/componentes/navbs/navbar_eventos.php');
                    @endphp
                  </div>
                </div>
                <!-- end opciones -->

              </div>

            </div>
          </div>
          <!-- end titulos -->
        </div>

        <div v-else>
          <!-- titulos -->
          <div class="card mt-5 py-3">
            <div class="card-body">

              <div class="d-flex bd-highlight">

                <!-- rirulo -->
                <div class="p-2 flex-grow-1 bd-highlight">
                  @{{ titles }}
                </div>
                <!-- end titulo -->

                <!-- opciones -->
                <div class="p-2 bd-highlight ">
                  <div v-if="titles ==  'Configuracion'">
                    @php
                    require_once( '../resources/componentes/navbs/navbar_configuracion.php');
                    @endphp
                  </div>

                </div>
                <!-- end opciones -->

              </div>

            </div>
          </div>
          <!-- end titulos -->
        </div>




      </div>
      <!--
      *
      *
      *
      end cabeceras
      *
      *
      *
    -->






    <!--
    *
    *
    *
    contenido tabs
    *
    *
    *
  -->
    <div class="card mt-5 py-5">
      <div class="card-body">





        <!-- contenedor de componentes tabs -->
        <div class="tab-content" id="myTabContent">

          <!-- dashboard -->
          <div class="tab-pane fade show active animate__animated animate__fadeIn" id="home" role="tabpanel" aria-labelledby="home-tab">
            <!-- importa la tabla eventos -->
            <div class="container">
              @php
              require_once( '../resources/componentes/tablas/tabla_dashboard.php');
              @endphp
            </div>
            <!-- end import eventos -->
          </div>
          <!-- end dashboard -->

          <!-- eventos -->
          <div class="tab-pane fade animate__animated animate__fadeIn" id="eventos" role="tabpanel" aria-labelledby="eventos-tab">
            <!-- importa la tabla eventos -->
            @php
            require_once( '../resources/componentes/tablas/tabla_eventos.php');
            @endphp
            <!-- end import eventos -->
          </div>
          <!-- end eventos -->

          <!-- notificaciones -->
          <div class="tab-pane fade animate__animated animate__fadeIn" id="notificaciones" role="tabpanel" aria-labelledby="notificaciones-tab">
          </div>
          <!-- end notificaciones -->

          <!-- configuracion -->
          <div class="tab-pane fade animate__animated animate__fadeIn" id="configuracion" role="tabpanel" aria-labelledby="configuracion-tab">

            <div class="container">
              <!-- importa la tabla eventos -->
              @php
              require_once( '../resources/componentes/tabs/configuracion.php');
              @endphp
              <!-- end import eventos -->
            </div>

          </div>
          <!-- end configuracion -->

        </div>
        <!-- end tabs -->





      </div>
    </div>
    <!--
    *
    *
    *
    end contenido tabs
    *
    *
    *
  -->
  </div>
  <!-- end tabs -->
  <section>

    <div>

    </main>
    @endsection
