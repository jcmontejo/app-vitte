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
                <div class="container my-5">
                    <div class="row">
                        <div class="col-lg-6">
                            <img class="w-100 shadow" src="{{ asset('images/process/bomba-pozo.png') }}" />
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5 mt-4">
                                <div class="col-sm-8">
                                    <h4 class="d-inline-block">Indicadores</h4>
                                </div>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#mdlHistoryWellPump">Historial Indicadores</button>
                                </div>
                                <div class="form-group col-md-12 col-lg-12 col-xs-12">
                                    <label>LPS<span class="text-danger">*</span></label>
                                    <input type="text" name="indicator1"
                                        class="form-control @error('indicator1') is-invalid @enderror"
                                        placeholder="Introduce indicador"
                                        value="{{ old('indicator1') ?? ($obj->well->indicator1 ?? '') }}" />
                                    @error('indicator1')
                                        <div class="fv-plugins-message-container">
                                            <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12 col-lg-12 col-xs-12">
                                    <label>(KG/CM<sup>2</sup>)<span class="text-danger">*</span></label>
                                    <input type="text" name="indicator2"
                                        class="form-control @error('indicator2') is-invalid @enderror"
                                        placeholder="Introduce indicador"
                                        value="{{ old('indicator2') ?? ($obj->well->indicator2 ?? '') }}" />
                                    @error('indicator2')
                                        <div class="fv-plugins-message-container">
                                            <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12 col-lg-12 col-xs-12">
                                    <label>Fe<span class="text-danger">*</span></label>
                                    <input type="text" name="indicator3"
                                        class="form-control @error('indicator3') is-invalid @enderror"
                                        placeholder="Introduce indicador"
                                        value="{{ old('indicator3') ?? ($obj->well->indicator3 ?? '') }}" />
                                    @error('indicator3')
                                        <div class="fv-plugins-message-container">
                                            <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12 col-lg-12 col-xs-12">
                                    <label>us/cm<span class="text-danger">*</span></label>
                                    <input type="text" name="indicator4"
                                        class="form-control @error('indicator4') is-invalid @enderror"
                                        placeholder="Introduce indicador"
                                        value="{{ old('indicator4') ?? ($obj->well->indicator4 ?? '') }}" />
                                    @error('indicator4')
                                        <div class="fv-plugins-message-container">
                                            <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#dos"
                    aria-expanded="false" aria-controls="dos">
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
                    data-bs-target="#tres" aria-expanded="false" aria-controls="tres">
                    DECLORACIÓN
                </button>
            </h2>
            <div id="tres" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    @include('Plant.Catalogs.includeDecloracion')
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
                    @include('Plant.Catalogs.includeFiltracion')
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#cinco" aria-expanded="false" aria-controls="cinco">
                    OSMOSIS INVERSA
                </button>
            </h2>
            <div id="cinco" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    @include('Plant.Catalogs.includeOsmosis')
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
                    CARCAMO DE BOMBEO A LA RED
                </button>
            </h2>
            <div id="siete" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    @include('Plant.Catalogs.includeCarcamo')
                </div>
            </div>
        </div>
    </div>
    @include('Plant.Catalogs.mdlHistoryWellPump')
