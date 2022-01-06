@extends('layouts.public')
@section('content')
<main>



  <div class="container py-5 mb-5  animate__animated animate__fadeIn">
    <div class="card shadow-lg">
      <div class="card-body ">


        @php
        include( '../resources/componentes/forms/forms_registro_compra_entrada.php');
        @endphp

      </div>
    </div>
  </div>

  <!-- footer -->
  @php
  include( '../resources/componentes/otros/footer.php');
  @endphp
  <!-- end footer -->

</main>
@endsection
