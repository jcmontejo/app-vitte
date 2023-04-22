<div class="accordion" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#uno"
                aria-expanded="true" aria-controls="uno">
                BOMBA DE POZO
            </button>
        </h2>
        <div id="uno" class="accordion-collapse collapse show" aria-labelledby="headingOne"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <!-- Table -->
                <div class="table-responsive">
                    <table class="table table-striped" id="tblBombaPozo" style="width:100%">
                        <thead>
                            <tr>
                                <th class="fit-space">Operador</th>
                                <th class="fit-space">Hora</th>
                                <th class="fit-space">Fecha</th>
                                <th class="fit-space">Flujo de línea de bombeo (LPS)</th>
                                <th class="fit-space">Nivel del pozo</th>
                                <th class="fit-space">Presión línea de bombeo (KG/CM2)</th>
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
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#dos" aria-expanded="false" aria-controls="dos">
                    OXIDACIÓN CON CLORO
                </button>
            </h2>
            <div id="dos" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    @include('Plant.Catalogs.includeOxidacion')
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#cuatro" aria-expanded="false" aria-controls="cuatro">
                    FILTRACIÓN
                </button>
            </h2>
            <div id="cuatro" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    {{-- @include('Plant.Catalogs.includeFiltracion') --}}
                        <div id="mostrar-filtros"></div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#seis" aria-expanded="false" aria-controls="seis">
                    DESINFECCIÓN
                </button>
            </h2>
            <div id="seis" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    @include('Plant.Catalogs.includeDesinfeccion')
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#siete" aria-expanded="false" aria-controls="siete">
                    OXIDACIÓN + DESINFECCIÓN
                </button>
            </h2>
            <div id="siete" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    @include('Plant.Catalogs.includeOxidacionDesinfeccion')
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#ocho" aria-expanded="false" aria-controls="ocho">
                    MEZCLADOR ESTATICO
                </button>
            </h2>
            <div id="ocho" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    @include('Plant.Catalogs.includeMezcladorEstatico')
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#nueve" aria-expanded="false" aria-controls="nueve">
                    HIPOCLORITO CON SENSOR
                </button>
            </h2>
            <div id="nueve" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    @include('Plant.Catalogs.includeHipocloritoConSensor')
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#diez" aria-expanded="false" aria-controls="diez">
                    CÁRCAMO DE BOMBEO
                </button>
            </h2>
            <div id="diez" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    @include('Plant.Catalogs.includeCarcamoBombeo')
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#once" aria-expanded="false" aria-controls="once">
                    SEDIMENTADOR
                </button>
            </h2>
            <div id="once" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    @include('Plant.Catalogs.includeSedimentador')
                </div>
            </div>
        </div>
    </div>
</div>
@include('Plant.Catalogs.mdlHistoryWellPump')
