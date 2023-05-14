{{-- Extends layout --}}
@extends('layouts._plantas')
{{-- Content --}}
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div id="indexResource" class="container-xxl">
        <!--begin::Card-->
        <div class="card">
            <!--begin::Card header-->
            <div class="card-header border-0 pt-6">
                <!--begin::Card title-->
                <div class="card-title">
                </div>
                <div class="card-toolbar">
                    <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                        <a href="javascript:void(0)" onclick="_resource.create();" type="button"
                            class="btn button-primary" data-bs-target="#kt_modal_add_user">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                            <i class="fas fa-plus"></i>
                            Crear Punto
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body pt-0">
                <!--begin::Table-->
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="tableResource">
                    <!--begin::Table head-->
                    <thead class="table-title">
                        <!--begin::Table row-->
                        <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                        <th class="min-w-10px">#</th>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Direccion</th>
                        <th>Latitud</th>
                        <th>Longitud</th>
                        <th>Estatus</th>
                    </tr>
                        </tr>
                        <!--end::Table row-->
                    </thead>

                </table>
                <!--end::Table-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
    @include('points.edit')
    @include('points.create')
</div>
@endsection
@section('js')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBytIUyY1c26GP7wpi0UZrkciY6FFxUO24&libraries=places"></script>
    <!-- Agrega un script para inicializar Datatables -->
    <script>
        var _resource = {
            initialize: function() {
                $('#tableResource').DataTable({
                    "language": {
                        "url": "https://cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json" // Cambia "es_es" por el código de idioma que desees
                    },
                    lengthChange: true,
                    processing: true,
                    serverSide: true,
                    ajax: "{{ url('/puntos/data') }}",
                    columns: [{
                            data: 'action',
                            name: 'action'
                        },
                        {
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'address',
                            name: 'address'
                        },
                        {
                            data: 'latitude',
                            name: 'latitude'
                        },
                        {
                            data: 'longitude',
                            name: 'longitude'
                        },
                        {
                            data: 'status',
                            name: 'status'
                        },
                    ]
                });
            },

            create: function() {
                document.getElementById("formResource").reset();
                $("#indexResource").css('display', 'none');
                $("#createResource").css('display', 'block');
            },

            save: function() {
                var name = $("#formResource input[name='name']").val();
                var address = $("#formResource input[name='address']").val();
                var latitude = $("#formResource input[name='latitude']").val();
                var longitude = $("#formResource input[name='longitude']").val();
                var user_id = $("#user_id").val();
                var route = "{{ url('/puntos/store') }}";
                var responseValidate = _resource.validateForm();
                if (responseValidate) {
                    $.ajax({
                        url: route,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            name: name,
                            address: address,
                            latitude: latitude,
                            longitude: longitude,
                            user_id : user_id
                        },
                        success: function() {
                            Notiflix.Notify.success('Punto agregado correctamente');
                            _resource.cancel();
                            _resource.reload();
                            _resource.initialize();
                        },
                        error: function(data) {
                            Notiflix.Notify.failure('Opss! algo salio mal.');
                        }
                    });
                }
            },

            reload: function() {
                var table = $("#tableResource").DataTable();
                table.destroy();
            },

            delete: function(id) {
                var route = "/studies/delete/" + id;
                Notiflix.Confirm.show(
                    'Parametros',
                    '¿Esta seguro de eliminar este Parametro?',
                    'Si',
                    'No',
                    () => {
                        $.ajax({
                                url: route,
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                type: 'DELETE',
                                dataType: 'json',
                                data: {
                                    id: id
                                },
                            })
                            .done(function(response) {
                                Notiflix.Notify.success('Parametro eliminado correctamente');
                                _resource.reload();
                                _resource.initialize();
                            })
                            .fail(function() {
                                Notiflix.Notify.failure('Opss! algo salio mal.');
                            });
                    },
                    () => {
                        Notiflix.Notify.warning('Petición cancelada');
                    }, {},
                );
            },

            cancel: function() {
                $("#indexResource").css('display', 'block');
                $("#createResource").css('display', 'none');
                $("#editResource").css('display', 'none');
            },

            edit: function(id) {
                $("#indexResource").css('display', 'none');
                $("#editResource").css('display', 'block');
                _resource.getResource(id);
            },

            getResource: function(id) {
                var route = "/puntos/edit/" + id;
                Notiflix.Loading.dots();
                $.get(route, function(data) {
                    // Limpiar el contenedor de evidencias
                    Notiflix.Loading.remove();
                    $("#formEditResource input[name='nameEdit']").val(data.point.name);
                    $("#formEditResource input[name='addressEdit']").val(data.point.address);
                    $("#formEditResource input[name='latitudeEdit']").val(data.point.latitude);
                    $("#formEditResource input[name='longitudeEdit']").val(data.point.longitude);
                    $("#user_idEdit").val(data.point.user_id).change();

                    // Generar el HTML para mostrar las evidencias
                    $("#content").val(data.evidence.content);
                    $(".btn-update-resource").attr('onclick', '_resource.update(' + data.point.id + ');');

                    // Generar el HTML para mostrar las evidencias
                    _resource.drawEvidencesTable(data.attachments);
                });
            },

            drawEvidencesTable: function(data) {
                const tabla = document.createElement('table');
                tabla.classList.add('table', 'table-responsive');

                // Crea y agrega el encabezado de la tabla
                const encabezado = document.createElement('thead');
                const filaEncabezado = document.createElement('tr');
                const encabezados = ['Imagen', 'Nombre', 'Fecha', 'Usuario'];

                encabezados.forEach(encabezado => {
                    const celda = document.createElement('th');
                    celda.textContent = encabezado;
                    filaEncabezado.appendChild(celda);
                });

                encabezado.appendChild(filaEncabezado);
                tabla.appendChild(encabezado);

                // Crea y agrega las filas de la tabla con los datos de las evidencias
                const cuerpo = document.createElement('tbody');

                data.forEach(evidencia => {
                    const fila = document.createElement('tr');

                    // Celda de imagen
                    const celdaImagen = document.createElement('td');
                    const imagen = document.createElement('img');
                    imagen.src = evidencia.photo_path;
                    imagen.style.maxWidth = '100px'; // Ajusta el tamaño de la imagen según tus necesidades
                    celdaImagen.appendChild(imagen);
                    fila.appendChild(celdaImagen);

                    // Celda de nombre
                    const celdaNombre = document.createElement('td');
                    celdaNombre.textContent = evidencia.nombre;
                    fila.appendChild(celdaNombre);

                    // Celda de fecha
                    const celdaFecha = document.createElement('td');
                    celdaFecha.textContent = evidencia.fecha;
                    fila.appendChild(celdaFecha);

                    // Celda de usuario
                    const celdaUsuario = document.createElement('td');
                    celdaUsuario.textContent = evidencia.usuario;
                    fila.appendChild(celdaUsuario);

                    cuerpo.appendChild(fila);
                });

                tabla.appendChild(cuerpo);

                // Agrega la tabla al contenedor en la vista
                const contenedor = document.getElementById('tabla-evidencias');
                contenedor.appendChild(tabla);
            },

            update: function(id) {
                var strName = $("#formEditResource input[name='strName']").val();
                var strLabel = $("#formEditResource input[name='strLabel']").val();

                var route = "{{ url('/studies/update') }}/" + id;
                var responseValidate = _resource.validateForm(2);
                if (responseValidate) {
                    $.ajax({
                        url: route,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: 'PUT',
                        dataType: 'json',
                        data: {
                            strName: strName,
                            strLabel: strLabel,
                        },
                        success: function() {
                            Notiflix.Notify.success('Parametro editado correctamente');
                            _resource.cancel();
                            _resource.reload();
                            _resource.initialize();
                        },
                        error: function(data) {
                            Notiflix.Notify.failure('Opss! algo salio mal.');
                        }
                    });
                }
            },

            validateForm: function() {
                let valid = true;
                var name = $("#formResource input[name='name']").val();
                var address = $("#formResource input[name='address']").val();
                var latitude = $("#formResource input[name='latitude']").val();
                var longitude = $("#formResource input[name='longitude']").val();

                if (name === '') {
                    valid = false;
                    message = 'El campo nombre es requerido.';
                } else if (address === '') {
                    valid = false;
                    message = 'El campo dirección es requerido.';
                } else if (latitude === '') {
                    valid = false;
                    message = 'El campo latitud es requerido.';
                } else if (longitude === '') {
                    valid = false;
                    message = 'El campo longitud es requerido.';
                }
                if (!valid) {
                    Notiflix.Report.failure('Error', message, 'Cerrar');
                }
                return valid;
            },

        }
        $(document).ready(function() {
            _resource.initialize();
            initMap();
        });
    </script>
    <script>
        function initMap() {
            // Ubicación inicial del mapa
            var initialLocation = { lat: 0, lng: 0 };

            // Crear mapa
            var map = new google.maps.Map(document.getElementById('map'), {
                center: initialLocation,
                zoom: 12
            });

            // Agregar marcador arrastrable
            var marker = new google.maps.Marker({
                position: initialLocation,
                map: map,
                draggable: true
            });

            // Actualizar latitud y longitud al arrastrar el marcador
            google.maps.event.addListener(marker, 'dragend', function(event) {
                var latLng = event.latLng;
                document.getElementById('latitude').value = latLng.lat();
                document.getElementById('longitude').value = latLng.lng();
            });
        }
    </script>
@endsection