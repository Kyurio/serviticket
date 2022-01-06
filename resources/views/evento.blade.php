@extends('layouts.public')
@section('content')
<main>



  <div class="container py-5 mb-5  animate__animated animate__fadeIn">
    <div class="card shadow-lg">
      <div class="card-body ">

        <div class="row">

          <div class="col-md-5">
            <img src="/serv1ticket/resources/img/andres_souper.png" class="img-responsive" width="450rem" alt="">
          </div>

          <div class="col-md-7">

            <div class="mt-5 py-5">

              <div class="mb-3">
                <h2 >Antofagasta vs Bayer Leverkusen</h2>
                <h4>chilean premier league</h4>
              </div>

              <p class="mt-5">
                El poderoso Huachipato de peineta Garcés se enfrente contra él manchester united de cristiano rolando,
                por el partido de vuelta de la supercopa, donde por extraños sucesos el equipo inglés termino jugando
                en la liga chilena en el partido de ida huachipao goleó 8-0 a los diablos rojos donde el guardametas y seleccionado
                nacional Castellón se lucio con un triplete de arco a arco
              </p>

              <div class="container">
                <div class="d-flex bd-highlight">

                  <div class="p-2 flex-fill bd-highlight">
                    <h5>Sectores: </h5>
                  </div>

                  <div class="p-2 flex-fill bd-highlight">
                    <button type="button" @click="SetValores(100000)" class="btn btn-sm redondo btn-info"> </button>
                    <button type="button" @click="SetValores(200000)" class="btn btn-sm redondo btn-success"> </button>
                    <button type="button" @click="SetValores(300000)" class="btn btn-sm redondo btn-warning"> </button>
                    <button type="button" @click="SetValores(400000)" class="btn btn-sm redondo btn-primary"> </button>
                    <button type="button" @click="SetValores(500000)" class="btn btn-sm redondo btn-danger"> </button>
                    <button type="button" @click="SetValores(600000)" class="btn btn-sm redondo btn-dark"> </button>
                  </div>
                </div>


                <div class="row">

                  <div class="col-md-6">
                    <img src="https://as01.epimg.net/chile/imagenes/2018/08/24/futbol/1535118494_289269_1535118969_noticia_normal.jpg" width="90%" alt="">
                  </div>

                  <div class="col-md-6 mt-5 mb-5">
                      <h4>$@{{ valor }}</h4>
                  </div>
                </div>


                <div class="mt-5">
                  <div class="d-flex flex-row-reverse bd-highlight">
                    <div class="p-2 bd-highlight">
                      <a  href="/serv1ticket/public/comprar/" class="btn btn-large btn-dark">Mi Ticket </a>
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div>


        </div>

      </div>
    </div>
  </div>

  <!-- footer -->
  <?php
  require_once( '../resources/componentes/otros/footer.php');
  ?>
  <!-- end footer -->

</main>
@endsection
