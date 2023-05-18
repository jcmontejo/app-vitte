<div class="card shadow mb-4" id="createResource" style="display: none;">
    <div class="card-header py-3">
        <div class="card-header border-0 pt-6">
            <!--begin::Card title-->
            <div class="card-title">
            </div>
        </div>
    </div>
    <div class="card-body">
        <form id="formResource">
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="name">Nombre <span class="mandatory">*</span></label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="address">Dirección <span class="mandatory">*</span></label>
                    <input type="text" class="form-control" id="address" name="address" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="latitude">Latitud <span class="mandatory">*</span></label>
                    <input type="text" class="form-control" id="latitude" name="latitude" required readonly>
                </div>
                <div class="form-group col-md-4">
                    <label for="longitude">Longitud <span class="mandatory">*</span></label>
                    <input type="text" class="form-control" id="longitude" name="longitude" required readonly>
                </div>
                <div class="form-group col-md-4">
                    <label for="user_id">Usuario asignado</label>
                    <select class="form-control" id="user_id" name="user_id">
                        <option value="">Seleccione un usuario</option>
                        <!-- Aquí puedes agregar opciones de usuarios desde tu base de datos -->
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }} {{ $user->strLastName }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-1 mb-2">
                <p>Seleccionar ubicación en el mapa</p>
                <div class="row mb-2">
                    <div class="col-md-8">
                        <input type="text" id="address" class="form-control" placeholder="Ingresa una dirección">
                    </div>
                    <div class="col-md-4">
                        <button onclick="geocodeAddress()" class="btn btn-primary">Buscar</button>
                    </div>
                </div>
                <div id="map"></div>
            </div>
            <a href="javascript:void(0);" onclick="_resource.save();" class="btn btn-primary">
                GUARDAR</a>
            <a href="javascript:void(0);" onclick="_resource.cancel();" class="btn btn-danger">
                CANCELAR</a>
        </form>
    </div>
</div>