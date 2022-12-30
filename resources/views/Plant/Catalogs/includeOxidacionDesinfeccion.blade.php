<div class="row">
    <div class="table-responsive">
        <table class="table table-striped" id="tblDesinfeccionOxidacion" style="width:100%">
            <thead>
                <tr>
                    <th class="fit-space">Operador</th>
                    <th class="fit-space">Hora</th>
                    <th class="fit-space">Fecha</th>
                    <th class="fit-space">Modelo de la bomba</th>
                    <th class="fit-space">Capacidad nominal de la bomba</th>
                    <th class="fit-space">Longitud del golpe (Carrera)</th>
                    <th class="fit-space">Velocidad del golpe (Pulsos)</th>
                    <th class="fit-space">Fd (LPH)</th>
                    <th class="fit-space">Alerta de dosis</th>
                    <th class="fit-space">CR</th>
                    <th class="fit-space">Alerta CR</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($historialOxidacionDesinfeccion as $history)
                    <tr>
                        <td>{{ $history->name }} {{ $history->strLastName }}</td>
                        <td>{{ TimeFormat($history->datSampling) }}</td>
                        <td class="text-right">{{ EnglishDateTimeFormat($history->datSampling) }}</td>
                        <td>{{ $history->strNombre }}</td>
                        <td class="text-right">{{ $history->capacidadNom }}</td>
                        <td class="text-right">{{ $history->indicator1 }}</td>
                        <td class="text-right">{{ $history->indicator2 }}</td>
                        <td>{{ $history->dblFlujoDisenioOxidante }}</td>
                        <td>{{ $history->alerta }}</td>
                        <td>{{ $history->indicator3 }}</td>
                        <td>{{ $history->alertaCloro }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
    {{-- @include('Plant.Catalogs.mdlHistoryOxidacion') --}}