<!-- Modal -->
<div class="modal fade" id="mdlHistoryWellPump" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Historial indicadores Bomba de Pozo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Operador</th>
                            <th>Hora</th>
                            <th>Fecha</th>
                            <th>Flujo de línea de bombeo (LPS)</th>
                            <th>Nivel del pozo</th>
                            <th>Presión línea de bombeo (KG/CM2)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($historialBombaDePozo as $history)
                            <tr>
                                <td>{{ $history->name }} {{ $history->strLastName }}</td>
                                <td>{{ TimeFormat($history->datSampling) }}</td>
                                <td class="text-right">{{ EnglishDateTimeFormat($history->datSampling) }}</td>
                                <td class="text-right">{{ $history->indicator1 }}</td>
                                <td class="text-right">{{ $history->indicator3 }}</td>
                                <td class="text-right">{{ $history->indicator2 }}</td>
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
