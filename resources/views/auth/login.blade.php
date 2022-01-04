@extends('layouts.app')



@section('content')
<div class="container mt-15rem">

  <div class="row">
    <div class="col-md-5">
      <img class="img-fluid" src="https://redgol.cl/_next/image?url=https%3A%2F%2Fredgol.cl%2F__export%2F1608498011612%2Fsites%2Fredgol%2Fimg%2F2020%2F12%2F20%2Ferror_mauricio_viana_antofagasta_crop1608497732477.png_1546398727.png&w=1920&q=75" alt="">
    </div>

    <div class="col-md-7">
      <div class="card py-5 mx-5">
        <div class="card-body">
          <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="row mb-3">
              <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo') }}</label>

              <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="row mb-3">
              <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

              <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="row mb-3">
              <div class="col-md-6 offset-md-4">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                  <label class="form-check-label" for="remember">
                    {{ __('Recordar') }}
                  </label>
                </div>
              </div>
            </div>

            <div class="row mb-0">
              <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                  {{ __('Ingresar') }}
                </button>

                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                  {{ __('no recuerdas tu contraseña ?') }}
                </a>
                @endif
              </div>
            </div>
          </form>

        </div>
      </div>

    </div>
  </div>


</div>
@endsection
