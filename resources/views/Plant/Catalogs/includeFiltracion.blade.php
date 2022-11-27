<div class="container my-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table id="tblFiltros" class="table table-bordered table-hover"
                    style="margin-top: 5px !important; width: 100% !important">
                    <thead>
                        <tr>
                            <th>Nombre de filtro</th>
                            <th class="text-center thColor"><button type="button"
                                    class="btn btn-primary btn-sm btn-add-filtro"><i
                                        class="fas fa-plus-circle"></i></button>
                                <div class="sizer"></div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($objFiltros as $filtro)
                            <tr>
                                <td><input type="hidden" name="intFiltro[]" value="{{ $filtro->id }}"><input value="{{ $filtro->strNombre }}" id="strNombreFiltro" type="text" name="strNombreFiltro[]" class="form-control strNombreFiltro"
                                    placeholder="Introduce nombre del filtro"></td>
                                <td>
                                    <button type="button" class="btn btn-icon btn-danger btn-xs mr-1 btn-delete-filtro"><i class="fa fa-trash icon-nm" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <img class="w-100 shadow" src="{{ asset('images/process/filtracion.png') }}" />
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
                    <input type="text" name="indicatorFiltracion1"
                        class="form-control @error('indicatorFiltracion1') is-invalid @enderror"
                        placeholder="Introduce indicador"
                        value="{{ old('indicatorFiltracion1') ?? ($obj->filtracion->indicator1 ?? '') }}" />
                    @error('indicatorFiltracion1')
                        <div class="fv-plugins-message-container">
                            <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="form-group col-md-12 col-lg-12 col-xs-12">
                    <label>B<span class="text-danger">*</span></label>
                    <input type="text" name="indicatorFiltracion2"
                        class="form-control @error('indicatorFiltracion2') is-invalid @enderror"
                        placeholder="Introduce indicador"
                        value="{{ old('indicatorFiltracion2') ?? ($obj->filtracion->indicator2 ?? '') }}" />
                    @error('indicatorFiltracion2')
                        <div class="fv-plugins-message-container">
                            <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="form-group col-md-12 col-lg-12 col-xs-12">
                    <label>C<span class="text-danger">*</span></label>
                    <input type="text" name="indicatorFiltracion3"
                        class="form-control @error('indicatorFiltracion3') is-invalid @enderror"
                        placeholder="Introduce indicador"
                        value="{{ old('indicatorFiltracion3') ?? ($obj->filtracion->indicator3 ?? '') }}" />
                    @error('indicatorFiltracion3')
                        <div class="fv-plugins-message-container">
                            <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="form-group col-md-12 col-lg-12 col-xs-12">
                    <label>D<span class="text-danger">*</span></label>
                    <input type="text" name="indicatorFiltracion4"
                        class="form-control @error('indicatorFiltracion4') is-invalid @enderror"
                        placeholder="Introduce indicador"
                        value="{{ old('indicatorFiltracion4') ?? ($obj->filtracion->indicator4 ?? '') }}" />
                    @error('indicatorFiltracion4')
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
