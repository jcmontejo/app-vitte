<div class="row">
    <div class="table-responsive">
        <table class="table table-striped" id="tblMezclador" style="width:100%">
            <thead>
                <tr>
                    <th class="fit-space">Operador</th>
                    <th class="fit-space">Hora</th>
                    <th class="fit-space">Fecha</th>
                    <th class="fit-space">Presión de entrada</th>
                    <th class="fit-space">Presión de salida</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($historialMezcladorEstatico as $history)
                    <tr>
                        <td>{{ $history->name }} {{ $history->strLastName }}</td>
                        <td>{{ TimeFormat($history->datSampling) }}</td>
                        <td class="text-right">{{ EnglishDateTimeFormat($history->datSampling) }}</td>
                        <td class="text-right">{{ $history->indicator1 }}</td>
                        <td class="text-right">{{ $history->indicator2 }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
    {{-- @include('Plant.Catalogs.mdlHistoryOxidacion') --}}