<div class="container my-5">
    <div class="row">
        <div class="col-lg-6">
            <img class="w-100 shadow" src="{{ asset('images/process/osmosis.png') }}" />
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
                    <label>A<span class="text-danger">*</span></label>
                    <input type="text" name="indicatorOsmosis1"
                        class="form-control @error('indicatorOsmosis1') is-invalid @enderror"
                        placeholder="Introduce indicador"
                        value="{{ old('indicatorOsmosis1') ?? ($obj->osmosis->indicator1 ?? '') }}" />
                    @error('indicatorOsmosis1')
                        <div class="fv-plugins-message-container">
                            <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="form-group col-md-12 col-lg-12 col-xs-12">
                    <label>B<span class="text-danger">*</span></label>
                    <input type="text" name="indicatorOsmosis2"
                        class="form-control @error('indicatorOsmosis2') is-invalid @enderror"
                        placeholder="Introduce indicador"
                        value="{{ old('indicatorOsmosis2') ?? ($obj->osmosis->indicator2 ?? '') }}" />
                    @error('indicatorOsmosis2')
                        <div class="fv-plugins-message-container">
                            <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="form-group col-md-12 col-lg-12 col-xs-12">
                    <label>C<span class="text-danger">*</span></label>
                    <input type="text" name="indicatorOsmosis3"
                        class="form-control @error('indicatorOsmosis3') is-invalid @enderror"
                        placeholder="Introduce indicador"
                        value="{{ old('indicatorOsmosis3') ?? ($obj->osmosis->indicator3 ?? '') }}" />
                    @error('indicatorOsmosis3')
                        <div class="fv-plugins-message-container">
                            <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="form-group col-md-12 col-lg-12 col-xs-12">
                    <label>D<span class="text-danger">*</span></label>
                    <input type="text" name="indicatorOsmosis4"
                        class="form-control @error('indicatorOsmosis4') is-invalid @enderror"
                        placeholder="Introduce indicador"
                        value="{{ old('indicatorOsmosis4') ?? ($obj->osmosis->indicator4 ?? '') }}" />
                    @error('indicatorOsmosis4')
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
