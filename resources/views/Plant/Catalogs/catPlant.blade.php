{{-- Extends layout --}}
@extends('layouts.admin')
{{-- Content --}}
@section('content')
    <h1 class="h3 mb-3">Ajustes de Planta</h1>
    <form action="/plant/plant/{{ $obj->getUrl() }}" method="POST">
        @csrf
        {{ method_field($obj->getMethod()) }}
        <input type="hidden" name="dblCatPlant" id="dblCatPlant" class="form-control" value="{{ $obj->dblCatPlant }}" />
        <div class="row">
            <div class="col-md-3 col-xl-2">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">{{ $obj->strName }}</h5>
                    </div>
                    <div class="list-group list-group-flush" role="tablist">
                        <a class="list-group-item list-group-item-action active" data-bs-toggle="list" href="#account"
                            role="tab">
                            Datos Generales
                        </a>
                        <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#password"
                            role="tab">
                            Procesos
                        </a>
                        <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#"
                            role="tab">
                            Bitacoras
                        </a>
                        <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#"
                            role="tab">
                            Calidad del Agua
                        </a>
                        <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#"
                            role="tab">
                            Cambio de Turno
                        </a>
                        <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#"
                            role="tab">
                            Consumos
                        </a>
                        <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#"
                            role="tab">
                            Inventarios
                        </a>
                        <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#"
                            role="tab">
                            INFOTEC
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-9 col-xl-10">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="account" role="tabpanel">

                        <div class="card">
                            <div class="card-header">

                                <h5 class="card-title mb-0">Public info</h5>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row">

                                        <div class="col-md-8">
                                            <div class="mb-3">
                                                <label>Nombre<span class="text-danger">*</span></label>
                                                <input type="text" name="strName"
                                                    class="form-control @error('strName') is-invalid @enderror"
                                                    placeholder="Introduce nombre"
                                                    value="{{ old('strName') ?? $obj->strName }}" />
                                                @error('strName')
                                                    <div class="fv-plugins-message-container">
                                                        <div data-field="username" data-validator="notEmpty"
                                                            class="fv-help-block">
                                                            <strong>{{ $message }}</strong>
                                                        </div>
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label>Dirección<span class="text-danger">*</span></label>
                                                <input type="text" name="strAddress"
                                                    class="form-control @error('strAddress') is-invalid @enderror"
                                                    placeholder="Introduce dirección"
                                                    value="{{ old('strAddress') ?? $obj->strAddress }}" />
                                                @error('strAddress')
                                                    <div class="fv-plugins-message-container">
                                                        <div data-field="username" data-validator="notEmpty"
                                                            class="fv-help-block">
                                                            <strong>{{ $message }}</strong>
                                                        </div>
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label>Latitud<span class="text-danger">*</span></label>
                                                <input type="text" name="intLongitude"
                                                    class="form-control @error('intLongitude') is-invalid @enderror"
                                                    placeholder="Introduce latitud"
                                                    value="{{ old('intLatitude') ?? $obj->intLatitude }}" />
                                                @error('intLatitude')
                                                    <div class="fv-plugins-message-container">
                                                        <div data-field="username" data-validator="notEmpty"
                                                            class="fv-help-block">
                                                            <strong>{{ $message }}</strong>
                                                        </div>
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label>Longitud<span class="text-danger">*</span></label>
                                                <input type="text" name="intLongitude"
                                                    class="form-control @error('intLongitude') is-invalid @enderror"
                                                    placeholder="Introduce longitud"
                                                    value="{{ old('intLongitude') ?? $obj->intLongitude }}" />
                                                @error('intLongitude')
                                                    <div class="fv-plugins-message-container">
                                                        <div data-field="username" data-validator="notEmpty"
                                                            class="fv-help-block">
                                                            <strong>{{ $message }}</strong>
                                                        </div>
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label>Factor de cloro residual<span class="text-danger">*</span></label>
                                                <input type="text" name="dblFactorCloroResidual"
                                                    class="form-control @error('dblFactorCloroResidual') is-invalid @enderror"
                                                    placeholder="Introduce factor de cloro residual"
                                                    value="{{ old('dblFactorCloroResidual') ?? $obj->dblFactorCloroResidual }}" />
                                                @error('dblFactorCloroResidual')
                                                    <div class="fv-plugins-message-container">
                                                        <div data-field="username" data-validator="notEmpty"
                                                            class="fv-help-block">
                                                            <strong>{{ $message }}</strong>
                                                        </div>
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label>Flujo de diseño de oxidante<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="dblFlujoDisenioOxidante"
                                                    class="form-control @error('dblFlujoDisenioOxidante') is-invalid @enderror"
                                                    placeholder="Introduce flujo de diseño de oxidante"
                                                    value="{{ old('dblFlujoDisenioOxidante') ?? $obj->dblFlujoDisenioOxidante }}" />
                                                @error('dblFlujoDisenioOxidante')
                                                    <div class="fv-plugins-message-container">
                                                        <div data-field="username" data-validator="notEmpty"
                                                            class="fv-help-block">
                                                            <strong>{{ $message }}</strong>
                                                        </div>
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label>Modelo de bomba<span class="text-danger">*</span></label>
                                                <select class="select2 form-control" name="intModeloBomba"
                                                    id="intModeloBomba">
                                                    <option value="">Selecciona opción</option>
                                                    @foreach ($objBombas as $row)
                                                        <option {{ $obj->intModeloBomba == $row->id ? 'selected' : '' }}
                                                            value="{{ $row->id }}">{{ $row->strNombre }} -
                                                            {{ $row->dblCapacidadNominal }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="text-center">
                                                @if ($obj->dblCatPlant > 0)
                                                    <div class="img-responsive mt-2">
                                                        {!! QrCode::color(0, 100, 0)->size(200)->generate($obj->dblCatPlant) !!}
                                                    </div>
                                                    <small>Imprime o escanea este QR desde la aplicación móvil, para
                                                        interactuar
                                                        con los procesos de la planta.</small>
                                                    <a
                                                        href="{{ url('/plant/plant/downloadQr') }}/{{ $obj->dblCatPlant }}">
                                                        <button type="button" class="btn btn-light"><span
                                                                class="fa fa-download"></span></button></a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                    {{-- </form> --}}
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="password" role="tabpanel">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Aplicar Filtros</h5>
                                <h6 class="card-subtitle text-muted">Actualmente solo mostramos datos de la semana actual.
                                </h6>
                            </div>
                            <div class="card-body">
                                <div class="row row-cols-md-auto align-items-center">
                                    <div class="col-12">
                                        <label class="visually-hidden" for="from">Desde:</label>
                                        <input type="date" class="form-control mb-2 me-sm-2" id="from"
                                            name="from" value="{{ $from }}">
                                    </div>
                                    <div class="col-12">
                                        <label class="visually-hidden" for="to">Hasta:</label>
                                        <input type="date" class="form-control mb-2 me-sm-2" id="to"
                                            name="to" value="{{ $to }}">
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary mb-2">Buscar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Procesos</h5>
                                @include('Plant.Catalogs.includeBombaPozo')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @include('Plant.Catalogs.mdlHistoryIncidences')
@endsection
{{-- Styles Section --}}
@section('styles')
    <link href="{{ asset('plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <style>
        .none {
            display: none;
        }

        .block {
            display: block;
        }
    </style>
@endsection
{{-- Scripts Section --}}
@section('js')
    <script>
        var _tableFiltros = [];
        document.addEventListener("DOMContentLoaded", function() {
            // Datatables Responsive
            $("#tblBombaPozo").DataTable({
                responsive: true,
                paging: false,
                ordering: false,
                info: false,
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'pdf'
                ]
            });
            $("#tblOxidacion").DataTable({
                responsive: true,
                paging: false,
                ordering: false,
                info: false,
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'pdf'
                ]
            });
            $("#tblDesinfeccion").DataTable({
                responsive: true,
                paging: false,
                ordering: false,
                info: false,
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'pdf'
                ]
            });
            $("#tblDesinfeccionOxidacion").DataTable({
                responsive: true,
                paging: false,
                ordering: false,
                info: false,
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'pdf'
                ]
            });
            $("#tblMezclador").DataTable({
                responsive: true,
                paging: false,
                ordering: false,
                info: false,
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'pdf'
                ]
            });
            $("#tblHipoclorito").DataTable({
                responsive: true,
                paging: false,
                ordering: false,
                info: false,
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'pdf'
                ]
            });
            $("#tblCarcamo").DataTable({
                responsive: true,
                paging: false,
                ordering: false,
                info: false,
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'pdf'
                ]
            });
            $("#tblSedimentador").DataTable({
                responsive: true,
                paging: false,
                ordering: false,
                info: false,
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'pdf'
                ]
            });
            // _tableFiltros = $("#tblFiltros").DataTable({
            //     searching: false,
            //     paging: false,
            //     info: false,
            //     columnDefs: [{
            //             targets: 'no-sort',
            //             orderable: false
            //         },
            //         {
            //             targets: 'no-search',
            //             searchable: false
            //         }
            //     ]
            // });
            $('.select2').select2();
        });
    </script>
    {{-- vendors --}}
    <script src="{{ asset('plugins/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js_system/plants.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(this).on('click', '.btn-add-filtro', addFiltro);
            $(this).on('click', '.btn-delete-filtro', deleteFiltro);
            obtenerFiltros();
        })

        function obtenerFiltros() {
            var dblCatPlant = document.getElementById('dblCatPlant');
            // Muestra el loader cuando sea necesario
            $.ajax({
                url: '/plantas/obtener/filtros/' + dblCatPlant.value,
                type: 'GET',
                success: function(response) {
                    //Manejar la respuesta
                    $('#mostrar-filtros').html(response);
                    _tableFiltros = $("#tblFiltros").DataTable({
                        searching: false,
                        paging: false,
                        info: false,
                        columnDefs: [{
                                targets: 'no-sort',
                                orderable: false
                            },
                            {
                                targets: 'no-search',
                                searchable: false
                            }
                        ]
                    });
                },
                error: function(xhr, status, error) {
                    // Manejar el error
                    console.log(error);
                }
            });
        }


        function addFiltro() {
            let intContador = _tableFiltros.rows().count();
            let intId = parseInt(intContador) + 1;
            let rowNode = _tableFiltros.row.add(
                    [
                        getNombre(),
                        getDeleteButton(),
                    ]
                )
                .draw()
                .node();
        }

        function getNombre() {
            let str = `<input type="hidden" class="intFiltro" name="intFiltro[]"><input type="text" name="strNombreFiltro[]" class="form-control strNombreFiltro"
        placeholder="Introduce nombre del filtro">`;
            return str;
        }

        function getDeleteButton() {
            let str =
                `<button type="button" class="btn btn-icon btn-danger btn-xs mr-1 btn-delete-filtro"><i class="fa fa-trash icon-nm" aria-hidden="true"></i></button>`;
            return str;
        }

        function deleteFiltro() {
            console.log('delete filter')
            let tr = $(this).closest('tr');
            swal({
                    title: "¿Estás seguro?",
                    text: "Una vez eliminado, no se podrá recuperar el registro",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        _tableFiltros.row(tr).remove().draw();
                        swal("Registro eliminado correctamente", {
                            icon: "success",
                        });
                    } else {
                        swal("La operación ha sido cancelada");
                    }
                });
        }
    </script>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            // Asignar la función de validación al evento "submit" del formulario
            $(this).on('click', '.btn-save-filter', storeFilters);
        });

        function storeFilters() {
            var formulario = document.getElementById('frmFilters');
            event.preventDefault(); // Evita que el formulario se envíe automáticamente
            if (validarFormulario()) {
                // Obtener valores de los inputs de la tabla dinámica
                var intFiltro = [];
                var strNombreFiltro = [];
                $('.intFiltro').each(function() {
                    intFiltro.push($(this).val());
                });
                $('.strNombreFiltro').each(function() {
                    strNombreFiltro.push($(this).val());
                });
                // Crear objeto FormData
                var formData = new FormData();
                var dblCatPlant = document.getElementById('dblCatPlant');
                formData.append('dblCatPlant', dblCatPlant.value);
                formData.append('intFiltro', JSON.stringify(intFiltro));
                formData.append('strNombreFiltro', JSON.stringify(strNombreFiltro));
                $.ajax({
                    url: `/plantas/filtros/guardar`, // URL de la página que procesará el formulario
                    type: 'POST', // método de envío del formulario
                    data: formData, // datos que se enviarán al servidor
                    contentType: false,
                    processData: false,
                    success: function(respuesta) {
                        // código a ejecutar si la petición es exitosa
                        console.log(respuesta);
                        // Ocultar el modal
                        $("#mdlFilters").modal("hide");
                        $('.modal').on('hidden.bs.modal', function(e) {
                            $('.modal-backdrop').remove();
                        });
                        obtenerFiltros();
                    },
                    error: function(xhr, status, error) {
                        // código a ejecutar si hay algún error
                        console.log(error);
                    }
                });
            }
        }

        // Función de validación
        function validarFormulario() {
            let valid = true;
            _tableFiltros.rows().every(function(index) {
                if (valid) {
                    valid = validateFilter(index)
                }
            });
            if (!valid) {
                event.preventDefault();
            }
            // Si todos los campos están llenados correctamente, se puede enviar el formulario
            return true;
        }

        function validateFilter(tr_index) {
            let tr_filter = _tableFiltros.row(tr_index).node();
            let strNombreFiltro = $(tr_filter).find(".strNombreFiltro").eq(0).val().trim();

            let valid = true;
            let message = '';
            if (strNombreFiltro == '') {
                message = `El campo nombre es obligatorio.`;
                valid = false;
            }
            if (!valid) {
                alert(message);
            }
            return valid;
        }
    </script>
@endsection
