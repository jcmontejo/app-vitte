{{-- Extends layout --}}
@extends('layouts.default')
{{-- Content --}}
@section('content')
    <div class="card card-custom">
        <form action="/plant/plant/{{ $obj->getUrl() }}" method="POST">
            <div class="card-body">
                @csrf
                {{ method_field($obj->getMethod()) }}
                <input type="hidden" name="dblCatPlant" class="form-control" value="{{ $obj->dblCatPlant }}" />
                <div class="col-12">
                    <!-- Tab Nav -->
                    <div class="nav-wrapper position-relative mb-2">
                        <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0 active d-flex align-items-center justify-content-center"
                                    id="tabs-icons-text-1-tab" data-bs-toggle="tab" href="#tabs-icons-text-1" role="tab"
                                    aria-controls="tabs-icons-text-1" aria-selected="true">
                                    <i class="icon icon-xs me-2 fas fa-industry"></i>
                                    Datos Generales
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0 d-flex align-items-center justify-content-center"
                                    id="tabs-icons-text-2-tab" data-bs-toggle="tab" href="#tabs-icons-text-2" role="tab"
                                    aria-controls="tabs-icons-text-2" aria-selected="false">
                                    <i class="icon icon-xs me-2 fas fa-gears"></i>
                                    Opciones de Planta
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End of Tab Nav -->
                    <!-- Tab Content -->
                    <div class="card border-0">
                        <div class="card-body p-0">
                            <div class="tab-content" id="tabcontent2">
                                <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel"
                                    aria-labelledby="tabs-icons-text-1-tab">
                                    @if ($obj->dblCatPlant > 0)
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                {!! QrCode::color(0, 100, 0)->size(200)->generate($obj->dblCatPlant) !!}
                                            </div>
                                        </div>
                                    @endif
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label>Nombre<span class="text-danger">*</span></label>
                                            <input type="text" name="strName"
                                                class="form-control @error('strName') is-invalid @enderror"
                                                placeholder="Introduce nombre"
                                                value="{{ old('strName') ?? $obj->strName }}" />
                                            @error('strName')
                                                <div class="fv-plugins-message-container">
                                                    <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                                        <strong>{{ $message }}</strong>
                                                    </div>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-8">
                                            <label>Dirección<span class="text-danger">*</span></label>
                                            <input type="text" name="strAddress"
                                                class="form-control @error('strAddress') is-invalid @enderror"
                                                placeholder="Introduce dirección"
                                                value="{{ old('strAddress') ?? $obj->strAddress }}" />
                                            @error('strAddress')
                                                <div class="fv-plugins-message-container">
                                                    <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                                        <strong>{{ $message }}</strong>
                                                    </div>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Latitud<span class="text-danger">*</span></label>
                                            <input type="text" name="intLongitude"
                                                class="form-control @error('intLongitude') is-invalid @enderror"
                                                placeholder="Introduce latitud"
                                                value="{{ old('intLatitude') ?? $obj->intLatitude }}" />
                                            @error('intLatitude')
                                                <div class="fv-plugins-message-container">
                                                    <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                                        <strong>{{ $message }}</strong>
                                                    </div>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Longitud<span class="text-danger">*</span></label>
                                            <input type="text" name="intLongitude"
                                                class="form-control @error('intLongitude') is-invalid @enderror"
                                                placeholder="Introduce longitud"
                                                value="{{ old('intLongitude') ?? $obj->intLongitude }}" />
                                            @error('intLongitude')
                                                <div class="fv-plugins-message-container">
                                                    <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                                        <strong>{{ $message }}</strong>
                                                    </div>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Factor de cloro residual<span class="text-danger">*</span></label>
                                            <input type="text" name="dblFactorCloroResidual"
                                                class="form-control @error('dblFactorCloroResidual') is-invalid @enderror"
                                                placeholder="Introduce factor de cloro residual"
                                                value="{{ old('dblFactorCloroResidual') ?? $obj->dblFactorCloroResidual }}" />
                                            @error('dblFactorCloroResidual')
                                                <div class="fv-plugins-message-container">
                                                    <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                                        <strong>{{ $message }}</strong>
                                                    </div>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Flujo de diseño de oxidante<span class="text-danger">*</span></label>
                                            <input type="text" name="dblFlujoDisenioOxidante"
                                                class="form-control @error('dblFlujoDisenioOxidante') is-invalid @enderror"
                                                placeholder="Introduce flujo de diseño de oxidante"
                                                value="{{ old('dblFlujoDisenioOxidante') ?? $obj->dblFlujoDisenioOxidante }}" />
                                            @error('dblFlujoDisenioOxidante')
                                                <div class="fv-plugins-message-container">
                                                    <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                                        <strong>{{ $message }}</strong>
                                                    </div>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Modelo de bomba<span class="text-danger">*</span></label>
                                            <select class="select2 form-control" name="intModeloBomba" id="intModeloBomba">
                                                <option value="">Selecciona opción</option>
                                                @foreach ($objBombas as $row)
                                                    <option {{ $obj->intModeloBomba == $row->id ? 'selected' : '' }}
                                                        value="{{ $row->id }}">{{ $row->strNombre }} -
                                                        {{ $row->dblCapacidadNominal }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <h3>Incidencias</h3>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#mdlHistoryIncidences">Historial de incidencias</button>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Capacidad<span class="text-danger">*</span></label>
                                            <input type="text" name="capacidad"
                                                class="form-control @error('capacidad') is-invalid @enderror"
                                                placeholder="Introduce capacidad"
                                                value="" />
                                            @error('capacidad')
                                                <div class="fv-plugins-message-container">
                                                    <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                                        <strong>{{ $message }}</strong>
                                                    </div>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Presión de Descarga<span class="text-danger">*</span></label>
                                            <input type="text" name="presion"
                                                class="form-control @error('presion') is-invalid @enderror"
                                                placeholder="Introduce presión de descarga"
                                                value="" />
                                            @error('presion')
                                                <div class="fv-plugins-message-container">
                                                    <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                                        <strong>{{ $message }}</strong>
                                                    </div>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Problemas de Calidad<span class="text-danger">*</span></label>
                                            <input type="text" name="problemasCalidad"
                                                class="form-control @error('problemasCalidad') is-invalid @enderror"
                                                placeholder="Introduce problemas de calidad"
                                                value="" />
                                            @error('problemasCalidad')
                                                <div class="fv-plugins-message-container">
                                                    <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                                        <strong>{{ $message }}</strong>
                                                    </div>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Procesos de potabilización<span class="text-danger">*</span></label>
                                            <input type="text" name="potabilizacion"
                                                class="form-control @error('potabilizacion') is-invalid @enderror"
                                                placeholder="Introduce procesos de potabilización"
                                                value="" />
                                            @error('potabilizacion')
                                                <div class="fv-plugins-message-container">
                                                    <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                                        <strong>{{ $message }}</strong>
                                                    </div>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel"
                                    aria-labelledby="tabs-icons-text-2-tab">
                                    <div id="blockButtons" class="block">
                                        <div class="row">
                                            <button type="button" class="btn btn-lg btn-primary showDiv"
                                                value="1">PROCESOS</button>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <button type="button" class="btn btn-lg btn-secondary showDiv"
                                                value="2">BITACORAS</button>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <button type="button" class="btn btn-lg btn-tertiary showDiv" value="3">CALIDAD
                                                DEL
                                                AGUA</button>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <button type="button" class="btn btn-lg btn-info showDiv" value="4">CAMBIO DE
                                                TURNO</button>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <button type="button" class="btn btn-lg btn-danger showDiv"
                                                value="5">CONSUMOS</button>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <button type="button" class="btn btn-lg btn-success showDiv"
                                                value="6">INVENTARIOS</button>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <button type="button" class="btn btn-lg btn-warning showDiv"
                                                value="7">INFOTEC</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div id="process" class="none hidden">
                                            <div class="col-sm-8">
                                                <h4 class="d-inline-block">Procesos</h4>
                                                <button
                                                    class="btn btn-sm btn-icon-only btn-primary d-inline-flex align-items-center restore"
                                                    type="button">
                                                    <i class="fas fa-circle-arrow-left"></i>
                                                </button>
                                            </div>
                                            @include('Plant.Catalogs.includeBombaPozo')
                                        </div>
                                        <div id="reports" class="none hidden">
                                            <div class="col-sm-8">
                                                <h4 class="d-inline-block">Bitacoras</h4>
                                                <button
                                                    class="btn btn-sm btn-icon-only btn-primary d-inline-flex align-items-center restore"
                                                    type="button">
                                                    <i class="fas fa-circle-arrow-left"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div id="quality" class="none hidden">
                                            <div class="col-sm-8">
                                                <h4 class="d-inline-block">Calidad del agua</h4>
                                                <button
                                                    class="btn btn-sm btn-icon-only btn-primary d-inline-flex align-items-center restore"
                                                    type="button">
                                                    <i class="fas fa-circle-arrow-left"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div id="change" class="none hidden">
                                            <div class="col-sm-8">
                                                <h4 class="d-inline-block">Cambio de turno</h4>
                                                <button
                                                    class="btn btn-sm btn-icon-only btn-primary d-inline-flex align-items-center restore"
                                                    type="button">
                                                    <i class="fas fa-circle-arrow-left"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div id="consumption" class="none hidden">
                                            <div class="col-sm-8">
                                                <h4 class="d-inline-block">Consumos</h4>
                                                <button
                                                    class="btn btn-sm btn-icon-only btn-primary d-inline-flex align-items-center restore"
                                                    type="button">
                                                    <i class="fas fa-circle-arrow-left"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div id="inventories" class="none hidden">
                                            <div class="col-sm-8">
                                                <h4 class="d-inline-block">Inventarios</h4>
                                                <button
                                                    class="btn btn-sm btn-icon-only btn-primary d-inline-flex align-items-center restore"
                                                    type="button">
                                                    <i class="fas fa-circle-arrow-left"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div id="infotec" class="none hidden">
                                            <div class="col-sm-8">
                                                <h4 class="d-inline-block">Infotec</h4>
                                                <button
                                                    class="btn btn-sm btn-icon-only btn-primary d-inline-flex align-items-center restore"
                                                    type="button">
                                                    <i class="fas fa-circle-arrow-left"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Tab Content -->
                </div>
            </div>
            <div class="card-footer">
                <a href="/plant/plant" class="btn btn-sm btn-secondary mr-2"><i class="fas fa-undo"></i>
                    Atras</a>
                <button type="submit" class="btn btn-sm btn-success btn-save-form"><i class="fas fa-check"></i>
                    Guardar</button>
            </div>
        </form>
    </div>
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
@section('scripts')
    {{-- vendors --}}
    <script src="{{ asset('plugins/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js_system/plants.js') }}"></script>
    <script>
        let _tableFiltros = [];
        $(document).ready(function() {
            initDatatables();
            $(this).on('click','.btn-add-filtro',addFiltro);
            $(this).on('click', '.btn-delete-filtro', deleteFiltro);
        })

        function initDatatables(){
            _tableFiltros = $("#tblFiltros").DataTable({
                "dom": '<"row"<"text-left col-4"f><"text-right col-8">>lt<"bottom"i><"clear">',
                "language": {
                    search: '<i class="fa fa-filter" aria-hidden="true"></i>',
                    searchPlaceholder: `Buscar`,
                },
                scrollY: '60vh',
                scrollX: '1140px',
                "bPaginate": false,
            });
        }

        function addFiltro(){
            let intContador = _tableFiltros.rows().count();
            let intId = parseInt(intContador) + 1;
            let rowNode = _tableFiltros
                .row.add(
                    [
                        getNombre(),
                        getDeleteButton(),
                    ]
                )
                .draw()
                .node();
        }

        function getNombre(){
            let str = `<input type="hidden" name="intFiltro[]"><input id="strNombreFiltro" type="text" name="strNombreFiltro[]" class="form-control strNombreFiltro"
        placeholder="Introduce nombre del filtro">`;
            return str;
        }

        function getDeleteButton() {
            let str =
                `<button type="button" class="btn btn-icon btn-danger btn-xs mr-1 btn-delete-filtro"><i class="fa fa-trash icon-nm" aria-hidden="true"></i></button>`;
            return str;
        }

        function deleteFiltro(){
            let tr = $(this).closest('tr');
            Swal.fire({
                title: `¿Esta seguro?`,
                text: `No se podrá revertir!`,
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: `Sí, eliminar!`,
                cancelButtonText: `No, cancelar!`,
                reverseButtons: true
            }).then(function(result) {
                if (result.value) {
                    _tableFiltros.row(tr).remove().draw();
                }
            });
        }
    </script>
@endsection
