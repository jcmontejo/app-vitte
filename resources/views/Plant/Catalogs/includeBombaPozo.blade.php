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
                                <h1 class="display-4">Completar Indicadores</h1>
                                <div class="form-group col-md-12 col-lg-12 col-xs-12">
                                    <label>LPS<span class="text-danger">*</span></label>
                                    <input type="text" name="intLongitude"
                                        class="form-control @error('intLongitude') is-invalid @enderror"
                                        placeholder="Introduce longitud"
                                        value="{{ old('intLongitude') ?? $obj->intLongitude }}" />
                                    @error('intLongitude')
                                        <div class="fv-plugins-message-container">
                                            <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12 col-lg-12 col-xs-12">
                                    <label>(KG/CM<sup>2</sup>)<span class="text-danger">*</span></label>
                                    <input type="text" name="intLongitude"
                                        class="form-control @error('intLongitude') is-invalid @enderror"
                                        placeholder="Introduce longitud"
                                        value="{{ old('intLongitude') ?? $obj->intLongitude }}" />
                                    @error('intLongitude')
                                        <div class="fv-plugins-message-container">
                                            <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12 col-lg-12 col-xs-12">
                                    <label>Fe<span class="text-danger">*</span></label>
                                    <input type="text" name="intLongitude"
                                        class="form-control @error('intLongitude') is-invalid @enderror"
                                        placeholder="Introduce longitud"
                                        value="{{ old('intLongitude') ?? $obj->intLongitude }}" />
                                    @error('intLongitude')
                                        <div class="fv-plugins-message-container">
                                            <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12 col-lg-12 col-xs-12">
                                    <label>us/cm<span class="text-danger">*</span></label>
                                    <input type="text" name="intLongitude"
                                        class="form-control @error('intLongitude') is-invalid @enderror"
                                        placeholder="Introduce longitud"
                                        value="{{ old('intLongitude') ?? $obj->intLongitude }}" />
                                    @error('intLongitude')
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
                    Quisque sapien augue, ornare id leo a, tristique elementum justo. Praesent non nulla sagittis,
                    sollicitudin justo id, varius erat. Nunc sed pharetra nisl. Cras et suscipit felis, in lacinia
                    sapien.
                    Integer venenatis sagittis massa, eu eleifend nibh venenatis in. Pellentesque a aliquet urna.
                    Curabitur
                    tortor metus, ultrices sed mi at, sagittis imperdiet turpis. Suspendisse nec luctus nunc. Fusce in
                    arcu
                    quis lacus mollis ultrices.
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
                    Praesent nec ipsum scelerisque dui condimentum pellentesque eu at lectus. Vivamus purus purus,
                    bibendum
                    in vestibulum ac, pharetra sit amet sapien. Nunc luctus, orci vel luctus cursus, nibh nisl
                    ullamcorper
                    ipsum, eu malesuada arcu augue id nisi. In auctor mi ac ante tincidunt tincidunt.
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
                    Praesent nec ipsum scelerisque dui condimentum pellentesque eu at lectus. Vivamus purus purus,
                    bibendum
                    in vestibulum ac, pharetra sit amet sapien. Nunc luctus, orci vel luctus cursus, nibh nisl
                    ullamcorper
                    ipsum, eu malesuada arcu augue id nisi. In auctor mi ac ante tincidunt tincidunt.
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
                    Praesent nec ipsum scelerisque dui condimentum pellentesque eu at lectus. Vivamus purus purus,
                    bibendum
                    in vestibulum ac, pharetra sit amet sapien. Nunc luctus, orci vel luctus cursus, nibh nisl
                    ullamcorper
                    ipsum, eu malesuada arcu augue id nisi. In auctor mi ac ante tincidunt tincidunt.
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
                    Praesent nec ipsum scelerisque dui condimentum pellentesque eu at lectus. Vivamus purus purus,
                    bibendum
                    in vestibulum ac, pharetra sit amet sapien. Nunc luctus, orci vel luctus cursus, nibh nisl
                    ullamcorper
                    ipsum, eu malesuada arcu augue id nisi. In auctor mi ac ante tincidunt tincidunt.
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
                    Praesent nec ipsum scelerisque dui condimentum pellentesque eu at lectus. Vivamus purus purus,
                    bibendum
                    in vestibulum ac, pharetra sit amet sapien. Nunc luctus, orci vel luctus cursus, nibh nisl
                    ullamcorper
                    ipsum, eu malesuada arcu augue id nisi. In auctor mi ac ante tincidunt tincidunt.
                </div>
            </div>
        </div>
    </div>
