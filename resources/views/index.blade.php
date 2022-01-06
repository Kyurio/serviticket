@extends('layouts.public')
@section('content')
<main>

  <div class="container">
    <div class="card mt-5 py-1">
      <div class="card-body">

        <!-- carousel -->
        <?php
        require_once( '../resources/componentes/otros/carousel.php');
        ?>
        <!-- end carousel -->

      </div>
    </div>
  </div>

  <div class="container">
    <div class="mt-5 py-2">

      <!-- carousel -->
      <?php
      require_once( '../resources/componentes/otros/galeria.php');
      ?>
      <!-- end carousel -->

    </div>
  </div>

  <div class="container">
    <!-- carousel -->
    <?php
    require_once( '../resources/componentes/otros/spam.php');
    ?>
    <!-- end carousel -->
  </div>

  <!-- footer -->
  <?php
  require_once( '../resources/componentes/otros/footer.php');
  ?>
  <!-- end footer -->

</main>
@endsection
