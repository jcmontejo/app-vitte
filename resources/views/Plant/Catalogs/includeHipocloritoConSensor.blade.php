<div class="row">
    <div class="table-responsive">
        <table class="table table-striped" id="tblHipoclorito" style="width:100%">
            <thead>
                <tr>
                    <th class="fit-space">Operador</th>
                    <th class="fit-space">Hora</th>
                    <th class="fit-space">Fecha</th>
                    <th class="fit-space">Nivel de Hipoclorito de Sodio</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($historialHipocloritoSensor as $history)
                    <tr>
                        <td>{{ $history->name }} {{ $history->strLastName }}</td>
                        <td>{{ TimeFormat($history->datSampling) }}</td>
                        <td class="text-right">{{ EnglishDateTimeFormat($history->datSampling) }}</td>
                        <td class="text-right">{{ $history->indicator1 }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
    {{-- @include('Plant.Catalogs.mdlHistoryOxidacion') --}}