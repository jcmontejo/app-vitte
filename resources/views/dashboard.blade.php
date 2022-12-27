@extends('layouts.admin')
@section('content')
    <h1 class="h3 mb-3"><strong>Panel</strong> Principal</h1>

    <div class="row">
        <div class="col-xl-6 col-xxl-5 d-flex">
            <div class="w-100">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Total Plantas Registradas</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="truck"></i>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="mt-1 mb-3">{{ getTotalPlant() }}</h1>
                                {{-- <div class="mb-0">
                                <span class="text-danger"> <i
                                        class="mdi mdi-arrow-bottom-right"></i> {{ getTotalPlant() }} </span>
                                <span class="text-muted">Since last week</span>
                            </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Operadores Registrados</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="users"></i>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="mt-1 mb-3">{{ getOperadores() }}</h1>
                                {{-- <div class="mb-0">
                                <span class="text-success"> <i
                                        class="mdi mdi-arrow-bottom-right"></i> 6.65% </span>
                                <span class="text-muted">Since last week</span>
                            </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-8 col-xxl-9 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Asistencia de Operadores en plantas</h5>
                    </div>
                    <table class="table table-hover my-0" id="tblAsistencias">
                        <thead>
                            <tr>
                                <th>Operador</th>
                                <th class="d-none d-xl-table-cell">Fecha</th>
                                <th class="d-none d-xl-table-cell">Hora</th>
                                <th>Planta</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($asistencias as $item)
                                <tr>
                                    <td>{{ $item->name }} {{ $item->strLastName }}</td>
                                    <td class="d-none d-xl-table-cell">{{ EnglishDateTimeFormat($item->created_at) }}</td>
                                    <td class="d-none d-xl-table-cell">{{ TimeFormat($item->created_at) }}</td>
                                    <td><span class="badge bg-success">{{ $item->strName }}</span></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-xxl-3 d-flex">
                <div class="card flex-fill w-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Uso de App Movil</h5>
                    </div>
                    <div class="card-body d-flex w-100">
                        <div class="align-self-center chart chart-lg">
                            <canvas id="chartjs-dashboard-bar"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Datatables Responsive
            // $("#tblAsistencias").DataTable({
            //     responsive: true,
            //     dom: 'Bfrtip',
            //     order: [[1, 'desc']],
            //     buttons: [
            //         'excel', 'pdf'
            //     ]
            // });
        });
    </script>
