@extends('layouts.main', ['activePage' => 'dashboard', 'titlePage' => __('Escritorio'), 'title' => 'Escritorio'])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        
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