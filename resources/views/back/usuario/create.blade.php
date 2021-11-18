@extends('layouts.main', ['activePage' => 'usuarios', 'titlePage' => __('Crear Usuario'), 'title' => 'Crear Usuario'])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col md-8">
            <div class="card">
                <div class="card-header card-header-icon card-header-rose">
                    <div class="card-icon">
                        <i class="material-icons">perm_identity</i>
                    </div>
                    <h4 class="card-title">Crear Usuario -
                        <small class="category">Complete los campos del formulario</small>
                    </h4>
                </div>
                <div class="card-body">
                    <form class="form" method="POST" action="{{ route('usuario.guardar') }}">
                        @csrf
                        @include('components.formulario-registro')
                        <div class="card-footer justify-content-left">
                            <button type="submit" class="btn btn-primary btn-lg">{{ __('Crear Cuenta') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-profile">
              <div class="card-avatar">
                <a href="#pablo">
                  <img class="img" src="../../assets/img/faces/marc.jpg" />
                </a>
              </div>
              <div class="card-body">
                <h6 class="card-category text-gray">CEO / Co-Founder</h6>
                <h4 class="card-title">Alec Thompson</h4>
                <p class="card-description">
                  Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                </p>
                <a href="#pablo" class="btn btn-rose btn-round">Follow</a>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
@endpush