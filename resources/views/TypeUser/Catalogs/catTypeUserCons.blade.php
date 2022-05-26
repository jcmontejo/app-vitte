{{-- Extends layout --}}
@extends('layouts.default')
{{-- Content --}}
@section('content')
    <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">Tipos de Usuario
                    <div class="text-muted pt-2 font-size-sm"></div>
                </h3>
            </div>
            <div class="card-toolbar">
                <!--end::Dropdown-->
                <a href="{{ url('/type_user/type_user/create') }}">
                    <button name="create" class="btn btn-primary font-weight-bolder">
                        <i class="fas fa-plus"></i>New
                    </button>
                </a>
            </div>
        </div>
        <div class="card-body">
            <!--end::Search Form-->
            @if ($message)
                <div class="alert alert-success system-message" role="alert">
                    {{ $message }}
                </div>
            @endif
            <table id="tbl" class="table table-bordered table-hover table-sm">
                <thead>
                    <tr>
                        <th class="fit-column thColor">Acciones</th>
                        <th class="fit-column thColor">Tipo de Usuario</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($objTypeUsers as $item)
                        <tr>
                            <td class="text-center">
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-clean btn-icon mr-2" type="button"
                                        id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item"
                                                href="/type_user/type_user/{{ $item->dblCatTypeUser }}/edit"><i
                                                    class="far fa-edit icon-nm btn btn-icon btn-primary btn-xs mr-1"></i>
                                                <span class="navi-text">Editar</span></a>
                                        </li>
                                        <li class="delete" value="{{ $item->dblCatTypeUser }}"><a class="dropdown-item"><i
                                                    class="far fa-trash-alt icon-nm btn btn-icon btn-danger btn-xs mr-1"></i>
                                                <span class="navi-text">Eliminar</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                            <td style='text-align:left'>{{ $item->strTypeUser }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

{{-- Styles Section --}}
@section('styles')
    <style media="screen">
        .fit-column {
            width: 1px;
            white-space: nowrap;
        }

        .table th {
            text-align: center;
            top: 0;
            position: sticky;
        }

        table#tblTypeUser th,
        table#tblTypeUser td {
            white-space: nowrap;
        }

        table.cellpadding-0 td {
            padding: 0;
        }

        .table th {
            text-align: center;
            top: 0;
            position: sticky;
            background: white;
        }

        .table th,
        .table td {
            padding: 10px;
        }

        table#tblTypeUser th,
        table#tblTypeUser td {
            white-space: nowrap;
        }

        table.cellpadding-0 td {
            padding: 0;
        }

        table.cellspacing-0 {
            border-spacing: 0;
            border-collapse: collapse;
        }



        .thColor {
            background-color: #7f7f7f !important;
            color: white !important;
        }

        .tdName {
            min-width: 600px;
        }

        .tdProcess {
            min-width: 100px;
        }

    </style>
@endsection
{{-- Scripts Section --}}
@section('scripts')
    <script>
        _table = [];
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            // initDatatables();
            $(this).on('click','.delete',Delete);
        });
    </script>
    {{-- -Scripts Default --}}
    <script>
        function initDatatables() {
            _table = $("#tbl").DataTable({
                "dom": '<"row"<"text-left col-4"f><"text-right col-8">>lt<"bottom"i><"clear">',
                "language": {
                    search: '<i class="fa fa-filter" aria-hidden="true"></i>',
                    searchPlaceholder: `Buscar`,
                },
                scrollY: '60vh',
                scrollX: '1140px',
                "bPaginate": false,
            });
        }

        function Delete() {
            let id = $(this).val();
            var route = "{{ url('/type_user/type_user') }}/" + id;
            Notiflix.Confirm.Show(
                'Tipos de Usuario',
                '¿Esta seguro de eliminar este tipo de usuario?',
                'Si',
                'No',
                function() { // Yes button callback
                    $.ajax({
                            url: route,
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            type: 'PUT',
                            dataType: 'json',
                            data: {
                                id: id
                            },
                        })
                        .done(function(response) {
                            // reload();
                            Notiflix.Report.Success('Bien hecho', 'Has eliminado un registro.',
                                'Click');
                                location.reload();
                        })
                        .fail(function() {
                            Notiflix.Report.Failure('Oooops!', 'Algo salio mal con la petición.',
                                'Click');
                        });
                },
                function() {
                    Notiflix.Notify.Warning('Petición cancelada.');
                }
            );
        }
    </script>
@endsection
