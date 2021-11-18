@extends('layouts.main', ['class' => 'off-canvas-sidebar', 'activePage' => 'register', 'title' => __('Sistema Web')])

@section('content')
<div class="container" style="height: auto;">
  <div class="row align-items-center">
    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
      <form class="form" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="card card-login card-hidden mb-3">
          <div class="card-header card-header-primary text-center">
            <h4 class="card-title"><strong>{{ __('Registro') }}</strong></h4>
            <div class="social-line">
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-facebook-square"></i>
              </a>
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-twitter"></i>
              </a>
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-google-plus"></i>
              </a>
            </div>
            <p class="card-description text-center">{{ __('O la opción clásica') }}</p>
          </div>
          
          <div class="card-body ">
        @include('components.formulario-registro')
        <div class="form-check mr-auto ml-3 mt-3">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" id="policy" name="policy" {{ old('policy', 1) ? 'checked' : '' }} >
            <span class="form-check-sign">
              <span class="check"></span>
            </span>
            {{ __('Estoy de acuerdo con la ') }} <a href="#">{{ __('Política de privacidad') }}</a>
          </label>
        </div>
      </div>
      <div class="card-footer justify-content-center">
        <button type="submit" class="btn btn-primary btn-link btn-lg">{{ __('Crear Cuenta') }}</button>
      </div>
    </div>
      </form>
    </div>
  </div>
</div>
@endsection
