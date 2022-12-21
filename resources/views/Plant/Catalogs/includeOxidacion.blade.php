<div class="row">
    <table class="table table-striped" id="tblOxidacion" style="width:100%">
        <thead>
            <tr>
                <th>Operador</th>
                <th>Hora</th>
                <th>Fecha</th>
                <th>Modelo de la bomba</th>
                <th>Capacidad nominal de la bomba</th>
                <th>Longitud del golpe (Carrera)</th>
                <th>Velocidad del golpe (Pulsos)</th>
                <th>Flujo dosificado por la bomba</th>
                <th>Alerta de dosis</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($historialOxidacion as $history)
                <tr>
                    <td>{{ $history->name }} {{ $history->strLastName }}</td>
                    <td>{{ TimeFormat($history->datSampling) }}</td>
                    <td class="text-right">{{ EnglishDateTimeFormat($history->datSampling) }}</td>
                    <td>{{ $history->strNombre }}</td>
                    <td class="text-right">{{ $history->capacidadNom }}</td>
                    <td class="text-right">{{ $history->indicator1 }}</td>
                    <td class="text-right">{{ $history->indicator2 }}</td>
                    <td>{{ $history->flujoDosificado }}</td>
                    <td>{{ $history->alerta }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@include('Plant.Catalogs.mdlHistoryOxidacion')