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
                            Crear Planta
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
                        <th></th>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Dirección</th>
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
    @include('Plant.Catalogs.edit')
    @include('Plant.Catalogs.create')
</div>
@endsection
@section('js')
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
                    ajax: "{{ url('/plantas/data') }}",
                    columns: [{
                            data: 'action',
                            name: 'action'
                        },
                        {
                            data: 'dblCatPlant',
                            name: 'dblCatPlant'
                        },
                        {
                            data: 'strName',
                            name: 'strName'
                        },
                        {
                            data: 'strAddress',
                            name: 'strAddress'
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
                var strName = $("#formResource input[name='strName']").val();
                var strLabel = $("#formResource input[name='strLabel']").val();

                var route = "{{ url('/studies/store') }}";
                var responseValidate = _resource.validateForm(1);
                if (responseValidate) {
                    $.ajax({
                        url: route,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            strName: strName,
                            strLabel: strLabel,
                        },
                        success: function() {
                            Notiflix.Notify.success('Parametro agregado correctamente');
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
                var route = "/studies/edit/" + id;
                Notiflix.Loading.dots();
                $.get(route, function(data) {
                    Notiflix.Loading.remove();
                    $("#formEditResource input[name='strName']").val(data.strName);
                    $("#formEditResource input[name='strLabel']").val(data.strLabel);
                    $(".btn-update-resource").attr('onclick', '_resource.update(' + data.id + ');');
                });
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

            validateForm: function(type) {
                let valid = true;
                if (type == 1) {
                    var strName = $("#formResource input[name='strName']").val();
                    var strLabel = $("#formResource input[name='strLabel']").val();
                } else {
                    var strName = $("#formEditResource input[name='strName']").val();
                    var strLabel = $("#formEditResource input[name='strLabel']").val();
                }

                if (strName === '') {
                    valid = false;
                    message = 'El campo nombre es requerido.';
                } else if (strLabel === '') {
                    valid = false;
                    message = 'El campo etiqueta es requerido.';
                }
                if (!valid) {
                    Notiflix.Report.failure('Error', message, 'Cerrar');
                }
                return valid;
            },

        }
        $(document).ready(function() {
            _resource.initialize();
        });
    </script>
@endsection