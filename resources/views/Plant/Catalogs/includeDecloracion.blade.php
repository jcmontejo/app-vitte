<div class="container my-5">
    <div class="row">
        <div class="col-lg-6">
            <img class="w-100 shadow" src="{{ asset('images/process/decloracion.png') }}" />
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
                    <input type="text" name="indicatorDecloracion1"
                        class="form-control @error('indicatorDecloracion1') is-invalid @enderror"
                        placeholder="Introduce indicador"
                        value="{{ old('indicatorDecloracion1') ?? ($obj->decloracion->indicator1 ?? '') }}" />
                    @error('indicatorDecloracion1')
                        <div class="fv-plugins-message-container">
                            <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="form-group col-md-12 col-lg-12 col-xs-12">
                    <label>% Pulsos<span class="text-danger">*</span></label>
                    <input type="text" name="indicatorDecloracion2"
                        class="form-control @error('indicatorDecloracion2') is-invalid @enderror"
                        placeholder="Introduce indicador"
                        value="{{ old('indicatorDecloracion2') ?? ($obj->decloracion->indicator2 ?? '') }}" />
                    @error('indicatorDecloracion2')
                        <div class="fv-plugins-message-container">
                            <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="form-group col-md-12 col-lg-12 col-xs-12">
                    <label>Lpd Q<span class="text-danger">*</span></label>
                    <input type="text" name="indicatorDecloracion3"
                        class="form-control @error('indicatorDecloracion3') is-invalid @enderror"
                        placeholder="Introduce indicador"
                        value="{{ old('indicatorDecloracion3') ?? ($obj->decloracion->indicator3 ?? '') }}" />
                    @error('indicatorDecloracion3')
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
