@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="card-header card-header-instalara">Ingreso de usuarios</div>

        <div class="card-body">


        <form method="POST" action="{{ route('login') }}">
          @csrf

          <div class="form-group row">
            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Correo Electrónico" value="{{ old('email') }}" required autofocus>
            @if ($errors->has('email'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif
          </div>

          <div class="form-group row">

              <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Contraseña" name="password" required>

              @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
              @endif
          </div>

          {{-- <div class="form-group row">
            <div class="col-md-6 offset-md-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                  {{ __('Remember Me') }}
                </label>
              </div>
            </div>
          </div> --}}

          <div class="form-group row justify-content-end">
              <button type="submit" class="btn btn-instalara">
                INGRESAR
              </button>


          </div>
          <div class="form-group row justify-content-end">
            <a class="btn btn-link btn-link-instalara" href="{{ route('password.request') }}">
              Olvido su contraseña ?
            </a>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
@endsection
