<div class="container my-5">
    <div class="row">
        <div class="col-lg-6">
            <img class="w-100 shadow" src="{{ asset('images/process/carcamo.png') }}" />
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
                    <input type="text" name="indicatorCarcamo1"
                        class="form-control @error('indicatorCarcamo1') is-invalid @enderror"
                        placeholder="Introduce indicador"
                        value="{{ old('indicatorCarcamo1') ?? ($obj->carcamo->indicator1 ?? '') }}" />
                    @error('indicatorCarcamo1')
                        <div class="fv-plugins-message-container">
                            <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="form-group col-md-12 col-lg-12 col-xs-12">
                    <label>% Pulsos<span class="text-danger">*</span></label>
                    <input type="text" name="indicatorCarcamo2"
                        class="form-control @error('indicatorCarcamo2') is-invalid @enderror"
                        placeholder="Introduce indicador"
                        value="{{ old('indicatorCarcamo2') ?? ($obj->carcamo->indicator2 ?? '') }}" />
                    @error('indicatorCarcamo2')
                        <div class="fv-plugins-message-container">
                            <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="form-group col-md-12 col-lg-12 col-xs-12">
                    <label>Fe<span class="text-danger">*</span></label>
                    <input type="text" name="indicatorCarcamo3"
                        class="form-control @error('indicatorCarcamo3') is-invalid @enderror"
                        placeholder="Introduce indicador"
                        value="{{ old('indicatorCarcamo3') ?? ($obj->carcamo->indicator3 ?? '') }}" />
                    @error('indicatorCarcamo3')
                        <div class="fv-plugins-message-container">
                            <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="form-group col-md-12 col-lg-12 col-xs-12">
                    <label>Mn/ppm<span class="text-danger">*</span></label>
                    <input type="text" name="indicatorCarcamo4"
                        class="form-control @error('indicatorCarcamo4') is-invalid @enderror"
                        placeholder="Introduce indicador"
                        value="{{ old('indicatorCarcamo4') ?? ($obj->carcamo->indicator4 ?? '') }}" />
                    @error('indicatorCarcamo4')
                        <div class="fv-plugins-message-container">
                            <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="form-group col-md-12 col-lg-12 col-xs-12">
                    <label>us/cm<span class="text-danger">*</span></label>
                    <input type="text" name="indicatorCarcamo5"
                        class="form-control @error('indicatorCarcamo5') is-invalid @enderror"
                        placeholder="Introduce indicador"
                        value="{{ old('indicatorCarcamo5') ?? ($obj->carcamo->indicator5 ?? '') }}" />
                    @error('indicatorCarcamo5')
                        <div class="fv-plugins-message-container">
                            <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="form-group col-md-12 col-lg-12 col-xs-12">
                    <label>Ph<span class="text-danger">*</span></label>
                    <input type="text" name="indicatorCarcamo6"
                        class="form-control @error('indicatorCarcamo6') is-invalid @enderror"
                        placeholder="Introduce indicador"
                        value="{{ old('indicatorCarcamo6') ?? ($obj->carcamo->indicator6 ?? '') }}" />
                    @error('indicatorCarcamo6')
                        <div class="fv-plugins-message-container">
                            <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="form-group col-md-12 col-lg-12 col-xs-12">
                    <label>LPS<span class="text-danger">*</span></label>
                    <input type="text" name="indicatorCarcamo7"
                        class="form-control @error('indicatorCarcamo7') is-invalid @enderror"
                        placeholder="Introduce indicador"
                        value="{{ old('indicatorCarcamo7') ?? ($obj->carcamo->indicator7 ?? '') }}" />
                    @error('indicatorCarcamo7')
                        <div class="fv-plugins-message-container">
                            <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="form-group col-md-12 col-lg-12 col-xs-12">
                    <label>LPS<span class="text-danger">*</span></label>
                    <input type="text" name="indicatorCarcamo8"
                        class="form-control @error('indicatorCarcamo8') is-invalid @enderror"
                        placeholder="Introduce indicador"
                        value="{{ old('indicatorCarcamo8') ?? ($obj->carcamo->indicator8 ?? '') }}" />
                    @error('indicatorCarcamo8')
                        <div class="fv-plugins-message-container">
                            <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="form-group col-md-12 col-lg-12 col-xs-12">
                    <label>LPS<span class="text-danger">*</span></label>
                    <input type="text" name="indicatorCarcamo9"
                        class="form-control @error('indicatorCarcamo9') is-invalid @enderror"
                        placeholder="Introduce indicador"
                        value="{{ old('indicatorCarcamo9') ?? ($obj->carcamo->indicator9 ?? '') }}" />
                    @error('indicatorCarcamo9')
                        <div class="fv-plugins-message-container">
                            <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="form-group col-md-12 col-lg-12 col-xs-12">
                    <label>LPS<span class="text-danger">*</span></label>
                    <input type="text" name="indicatorCarcamo10"
                        class="form-control @error('indicatorCarcamo10') is-invalid @enderror"
                        placeholder="Introduce indicador"
                        value="{{ old('indicatorCarcamo10') ?? ($obj->carcamo->indicator10 ?? '') }}" />
                    @error('indicatorCarcamo10')
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
