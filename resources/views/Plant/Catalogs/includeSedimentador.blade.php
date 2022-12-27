<div class="row">
    <div class="table-responsive">
        <table class="table table-striped" id="tblSedimentador" style="width:100%">
            <thead>
                <tr>
                    <th class="fit-space">Operador</th>
                    <th class="fit-space">Hora</th>
                    <th class="fit-space">Fecha</th>
                    <th class="fit-space">Nivel de Agua</th>
                    <th class="fit-space">Alerta</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($historialSedimentador as $history)
                    <tr>
                        <td>{{ $history->name }} {{ $history->strLastName }}</td>
                        <td>{{ TimeFormat($history->datSampling) }}</td>
                        <td class="text-right">{{ EnglishDateTimeFormat($history->datSampling) }}</td>
                        <td class="text-right">{{ $history->indicator1 }}</td>
                        <td>{{ $history->alerta }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
    {{-- @include('Plant.Catalogs.mdlHistoryOxidacion') --}}