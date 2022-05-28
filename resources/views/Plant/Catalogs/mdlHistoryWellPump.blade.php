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
                            <th>LPS</th>
                            <th>(KG/CM2)</th>
                            <th>Fe</th>
                            <th>us/cm</th>
                            <th>Fecha de captura</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trasheds as $trashed)
                            <tr>
                                <td>{{ $trashed->indicator1 }}</td>
                                <td>{{ $trashed->indicator2 }}</td>
                                <td>{{ $trashed->indicator3 }}</td>
                                <td>{{ $trashed->indicator4 }}</td>
                                <td>{{ EnglishDateTimeFormat($trashed->datSampling) }}</td>
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
