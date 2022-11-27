<div class="container my-5">
    <div class="row">
        <div class="col-lg-6">
            <img class="w-100 shadow" src="{{ asset('images/process/oxidacion-cloro.png') }}" />
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
                    <input type="text" name="indicatorOxidacion1"
                        class="form-control @error('indicatorOxidacion1') is-invalid @enderror"
                        placeholder="Introduce indicador"/>
                    @error('indicatorOxidacion1')
                        <div class="fv-plugins-message-container">
                            <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="form-group col-md-12 col-lg-12 col-xs-12">
                    <label>% Pulsos<span class="text-danger">*</span></label>
                    <input type="text" name="indicatorOxidacion2"
                        class="form-control @error('indicatorOxidacion2') is-invalid @enderror"
                        placeholder="Introduce indicador"/>
                    @error('indicatorOxidacion2')
                        <div class="fv-plugins-message-container">
                            <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                    @enderror
                </div>
                {{-- <div class="form-group col-md-12 col-lg-12 col-xs-12">
                    <label>Lpd Q<span class="text-danger">*</span></label>
                    <input type="text" name="indicatorOxidacion3"
                        class="form-control @error('indicatorOxidacion3') is-invalid @enderror"
                        placeholder="Introduce indicador"
                        value="{{ old('indicatorOxidacion3') ?? ($obj->oxidacion->indicator3 ?? '') }}" />
                    @error('indicatorOxidacion3')
                        <div class="fv-plugins-message-container">
                            <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                    @enderror
                </div> --}}
            </div>
        </div>
    </div>
</div>
@include('Plant.Catalogs.mdlHistoryOxidacion')