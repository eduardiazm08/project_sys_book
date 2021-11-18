@extends('layouts.main', ['activePage' => 'usuario', 'titlePage' => __('Usuarios'), 'title' => 'Usuarios'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">assignment</i>
                            </div>
                            <h4 class="card-title float-left">Usuarios</h4>
                            <a href="{{route('usuario.crear')}}" class="btn btn-warning float-right">Crear Usuario</a>
                        </div>
                        <div class="card-body">
                            <div class="toolbar">
                              <!--        Here you can write extra buttons/actions for the toolbar              -->
                            </div>
                            <div class="material-datatables">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>NOMBRE</th>
                                            <th>USUARIO</th>
                                            <th>EMAIL</th>
                                            <th>ESTADO</th>
                                            <th class="disabled-sorting  text-right">ACCIONES</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>NOMBRE</th>
                                            <th>USUARIO</th>
                                            <th>EMAIL</th>
                                            <th>ESTADO</th>
                                            <th class="text-right">ACCIONES</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($usuarios as $user)
                                            <tr>
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->nombre}}</td>
                                                <td>{{$user->username}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>
                                                    @switch($user->estado)
                                                        @case(1)
                                                            Activo
                                                            @break
                                                        @case(2)
                                                            Inactivo
                                                            @break      
                                                    @endswitch
                                                </td>
                                                <td class="text-right">
                                                    <a href="#" class="btn btn-link btn-info btn-just-icon like"><i class="material-icons">create</i></a>
                                                    <a href="#" class="btn btn-link btn-warning btn-just-icon edit"><i class="material-icons">system_update_alt</i></a>
                                                    <a href="#" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">delete</i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection

@push('js')
    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
    <script src="{{asset('assets')}}/js/plugins/jquery.dataTables.min.js"></script>
    <script src="{{asset('assets')}}/js/style-site.js" type="javascript"></script>
@endpush
@push('script')
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            md.initDashboardPageCharts();
            $('#datatables').dataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
                },
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
            $('#datatables').DataTable();
            $('.dataTables_length').addClass('bs-select');
        });
    </script>
@endpush