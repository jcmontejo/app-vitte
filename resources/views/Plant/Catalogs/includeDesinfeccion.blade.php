<div class="container my-5">
    <div class="row">
        <div class="col-lg-6">
            <img class="w-100 shadow" src="{{ asset('images/process/desinfeccion.png') }}" />
        </div>
        <div class="col-lg-6">
            <div class="p-5 mt-4">
                <div class="col-sm-8">
                    <h4 class="d-inline-block">Indicadores</h4>
                </div>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#mdlHistoryOxidacion">Historial Indicadores</button>
                </div>
                <div class="form-group col-md-12 col-lg-12 col-xs-12">
                    <label>% Carrera<span class="text-danger">*</span></label>
                    <input type="text" name="indicatorDesinfeccion1"
                        class="form-control @error('indicatorDesinfeccion1') is-invalid @enderror"
                        placeholder="Introduce indicador"
                        value="{{ old('indicatorDesinfeccion1') ?? ($obj->desinfeccion->indicator1 ?? '') }}" />
                    @error('indicatorDesinfeccion1')
                        <div class="fv-plugins-message-container">
                            <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="form-group col-md-12 col-lg-12 col-xs-12">
                    <label>% Pulsos<span class="text-danger">*</span></label>
                    <input type="text" name="indicatorDesinfeccion2"
                        class="form-control @error('indicatorDesinfeccion2') is-invalid @enderror"
                        placeholder="Introduce indicador"
                        value="{{ old('indicatorDesinfeccion2') ?? ($obj->desinfeccion->indicator2 ?? '') }}" />
                    @error('indicatorDesinfeccion2')
                        <div class="fv-plugins-message-container">
                            <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="form-group col-md-12 col-lg-12 col-xs-12">
                    <label>Fe<span class="text-danger">*</span></label>
                    <input type="text" name="indicatorDesinfeccion3"
                        class="form-control @error('indicatorDesinfeccion3') is-invalid @enderror"
                        placeholder="Introduce indicador"
                        value="{{ old('indicatorDesinfeccion3') ?? ($obj->desinfeccion->indicator3 ?? '') }}" />
                    @error('indicatorDesinfeccion3')
                        <div class="fv-plugins-message-container">
                            <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="form-group col-md-12 col-lg-12 col-xs-12">
                    <label>Mn/ppm<span class="text-danger">*</span></label>
                    <input type="text" name="indicatorDesinfeccion4"
                        class="form-control @error('indicatorDesinfeccion4') is-invalid @enderror"
                        placeholder="Introduce indicador"
                        value="{{ old('indicatorDesinfeccion4') ?? ($obj->desinfeccion->indicator4 ?? '') }}" />
                    @error('indicatorDesinfeccion4')
                        <div class="fv-plugins-message-container">
                            <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="form-group col-md-12 col-lg-12 col-xs-12">
                    <label>us/cm<span class="text-danger">*</span></label>
                    <input type="text" name="indicatorDesinfeccion5"
                        class="form-control @error('indicatorDesinfeccion5') is-invalid @enderror"
                        placeholder="Introduce indicador"
                        value="{{ old('indicatorDesinfeccion5') ?? ($obj->desinfeccion->indicator5 ?? '') }}" />
                    @error('indicatorDesinfeccion5')
                        <div class="fv-plugins-message-container">
                            <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="form-group col-md-12 col-lg-12 col-xs-12">
                    <label>Ph<span class="text-danger">*</span></label>
                    <input type="text" name="indicatorDesinfeccion6"
                        class="form-control @error('indicatorDesinfeccion6') is-invalid @enderror"
                        placeholder="Introduce indicador"
                        value="{{ old('indicatorDesinfeccion6') ?? ($obj->desinfeccion->indicator6 ?? '') }}" />
                    @error('indicatorDesinfeccion6')
                        <div class="fv-plugins-message-container">
                            <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="form-group col-md-12 col-lg-12 col-xs-12">
                    <label>LPS<span class="text-danger">*</span></label>
                    <input type="text" name="indicatorDesinfeccion7"
                        class="form-control @error('indicatorDesinfeccion7') is-invalid @enderror"
                        placeholder="Introduce indicador"
                        value="{{ old('indicatorDesinfeccion7') ?? ($obj->desinfeccion->indicator7 ?? '') }}" />
                    @error('indicatorDesinfeccion7')
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
