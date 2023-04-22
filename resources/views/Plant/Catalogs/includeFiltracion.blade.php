<div class="container my-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Aquí van los elementos de la columna izquierda -->
                        </div>
                        <div class="col-md-6 text-end">
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#mdlFilters"><i class="fas fa-plus"></i> Crear nuevo</a>
                        </div>
                    </div>
                    {{-- Modal para crear filtros --}}
                    <div class="modal fade" id="mdlFilters" tabindex="-1" aria-labelledby="mdlFiltersLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="mdlFiltersLabel">Agregar nuevo filtro</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button type="button" class="btn btn-success btn-add-filtro"
                                                        id="add-filter"><i class="fas fa-plus"></i>Agregar</button>
                                                </div>
                                            </div>
                                            <div class="row mt-3" id="filters-container">
                                                <!-- Aquí se agregarán los campos de entrada de texto -->
                                                <div class="table-responsive">
                                                    <form id="frmFilters">
                                                        <table id="tblFiltros" class="table table-bordered table-hover"
                                                            style="margin-top: 5px !important; width: 100% !important">
                                                            <thead>
                                                                <tr>
                                                                    <th style="min-width:650px">Nombre de filtro</th>
                                                                    <th style="min-width:5px">
                                                </div>
                                                </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($objFiltros as $filtro)
                                                        <tr>
                                                            <td><input type="hidden" class="intFiltro"
                                                                    name="intFiltro[]"
                                                                    value="{{ $filtro->id }}"><input
                                                                    value="{{ $filtro->strNombre }}" type="text"
                                                                    name="strNombreFiltro[]"
                                                                    class="form-control strNombreFiltro"
                                                                    placeholder="Introduce nombre del filtro"></td>
                                                            <td>
                                                                <button type="button"
                                                                    class="btn btn-icon btn-danger btn-xs mr-1 btn-delete-filtro"><i
                                                                        class="fa fa-trash icon-nm"
                                                                        aria-hidden="true"></i></button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                                </table>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-primary btn-save-filter">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Fin del modal --}}
                <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                    @foreach ($objFiltros as $key => $filtro)
                        @php($active = $key == 0 ? 'active' : '')
                        <li class="nav-item" role="presentation">
                            <button class="nav-link {{ $active }}" id="tab{{ $filtro->id }}-tab"
                                data-bs-toggle="tab" data-bs-target="#tab{{ $filtro->id }}" type="button"
                                role="tab" aria-controls="tab1"
                                aria-selected="true">{{ $filtro->strNombre }}</button>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="myTabContent">
                    @foreach ($objFiltros as $mey => $filtro)
                        @php($active = $mey == 0 ? 'active' : '')
                        <div class="tab-pane fade show {{ $active }}" id="tab{{ $filtro->id }}" role="tabpanel"
                            aria-labelledby="tab{{ $filtro->id }}-tab">
                            <h5 class="card-title">{{ $filtro->strNombre }}</h5>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Presión de entrada</th>
                                        <th>Presión de Salida</th>
                                        <th>Indicador</th>
                                        <th>Alarma</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($filtro->historial as $item)
                                        <tr>
                                            <td>{{ number_format($item->indicator1, 2) }}</td>
                                            <td>{{ number_format($item->indicator2, 2) }}</td>
                                            <td>{{ number_format($item->indicator1 - $item->indicator2, 2) }}</td>
                                            <td>{{ alarmaFiltracion(number_format($item->indicator1, 2), number_format($item->indicator2, 2)) }}
                                            </td>
                                        </tr>
                                    @empty
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
</div>
