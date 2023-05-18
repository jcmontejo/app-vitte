<div class="card shadow mb-4" id="editResource" style="display: none;">
    <div class="card-header py-3">
        <div class="card-header border-0 pt-6">
            <!--begin::Card title-->
            <div class="card-title">
            </div>
        </div>
    </div>
    <div class="card-body">
        <form id="formEditResource">
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="nameEdit">Nombre <span class="mandatory">*</span></label>
                    <input type="text" class="form-control" id="nameEdit" name="nameEdit" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="addressEdit">Dirección <span class="mandatory">*</span></label>
                    <input type="text" class="form-control" id="addressEdit" name="addressEdit" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="latitudeEdit">Latitud <span class="mandatory">*</span></label>
                    <input type="text" class="form-control" id="latitudeEdit" name="latitudeEdit" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="longitudeEdit">Longitud <span class="mandatory">*</span></label>
                    <input type="text" class="form-control" id="longitudeEdit" name="longitudeEdit" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="user_idEdit">Usuario asignado</label>
                    <select class="form-control" id="user_idEdit" name="user_idEdit">
                        <option value="">Seleccione un usuario</option>
                        <!-- Aquí puedes agregar opciones de usuarios desde tu base de datos -->
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }} {{ $user->strLastName }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h4>Evidencias</h4>
                    <div class="row" id="evidencesSection">
                        <!-- Aquí se mostrarán las evidencias -->
                        <div class="form-group col-md-12">
                            <label for="">Comentarios de labor en campo</label>
                            <textarea class="form-control" name="content" id="content" cols="30" rows="3"></textarea>
                        </div>
                        <div id="tabla-evidencias"></div>
                    </div>
                </div>
            </div>
        </form>
        <div class="col-md-12 mt-1">
            <a href="javascript:void(0);" class="btn btn-primary btn-update-resource">
                GUARDAR</a>
            <a href="javascript:void(0);" onclick="_resource.cancel();" class="btn btn-danger">CANCELAR</a>
        </div>
    </div>
</div>