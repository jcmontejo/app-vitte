<!-- Modal -->
<div class="modal fade" id="mdlHistoryIncidences" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Historial de Incidencias</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Capacidad</th>
                            <th>Presión de descarga</th>
                            <th>Problemas de calidad</th>
                            <th>Procesos de potabilización</th>
                            <th>Fecha de captura</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($incidences as $incidende)
                            <tr>
                                <td>{{ $incidende->indicator1 }}</td>
                                <td>{{ $incidende->indicator2 }}</td>
                                <td>{{ $incidende->indicator3 }}</td>
                                <td>{{ $incidende->indicator4 }}</td>
                                <td>{{ EnglishDateTimeFormat($incidende->datIncidende) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
