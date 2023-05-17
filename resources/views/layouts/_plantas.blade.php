<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Sistema de Control Operativo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/notiflix/dist/notiflix-3.2.6.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/datatables-bs4/css/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/datatables-buttons/css/buttons.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    {{-- <link href="{{ asset('/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css" /> --}}
    <style>
        /* Importar la fuente Roboto de Google Fonts */
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

        /* Agrega aquí tus estilos personalizados si es necesario */
        body {
            font-family: 'Roboto', sans-serif;
        }

        /* Estilos para los títulos de la tabla */
        .table-title {
            font-family: 'Roboto', sans-serif;
            font-weight: 700;
            font-size: 18px;
            color: #333;
            text-transform: uppercase;
        }

        .bg-blue {
            background-color: #082246;
        }

        .button-primary {
            background-color: #FFA500 !important;
            border-color: #FFA500 !important;
            color: white !important;
        }

        .page-item.active .page-link {
            z-index: 3;
            color: #fff;
            background-color: #FFA500;
            border-color: #FFA500;
        }

        .mandatory {
            color: red;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-blue">
        <a class="navbar-brand" href="{{ url('/dashboard') }}">CONTROL OPERATIVO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                @role('admin-plantas')
                    @include('layouts.partials._navbar_plantas')
                @endrole
                @role('admin-otra-plataforma')
                    @include('layouts.partials._navbar_alterno')
                @endrole
            </ul>
        </div>
    </nav>
    <div class="mt-4">
        <div class="col-md-12">
            @yield('content')
        </div>
    </div>
    <!-- JS de jQuery (requerido por Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>

    <!-- JS de Popper.js (requerido por Bootstrap) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>

    <!-- JS de Bootstrap 4 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{ asset('/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('/assets/js/scripts.bundle.js') }}"></script>

    <script src="{{ asset('/notiflix/dist/notiflix-notify-aio-3.2.6.min.js') }}"></script>
    <script src="{{ asset('/notiflix/dist/notiflix-report-aio-3.2.6.min.js') }}"></script>
    <script src="{{ asset('/notiflix/dist/notiflix-confirm-aio-3.2.6.min.js') }}"></script>
    <script src="{{ asset('/notiflix/dist/notiflix-loading-aio-3.2.6.min.js') }}"></script>
    <script src="{{ asset('/notiflix/dist/notiflix-block-aio-3.2.6.min.js') }}"></script>
    <script src="{{ asset('/assets/datatables/jquery.dataTables.js') }}" defer></script>
    <script src="{{ asset('/assets/datatables/jquery.dataTables.min.js') }}" defer></script>
    <script src="{{ asset('/assets/datatables-bs4/js/dataTables.bootstrap4.min.js') }}" defer></script>
    <script src="{{ asset('/assets/datatables-buttons/js/dataTables.buttons.js') }}" defer></script>
    <script src="{{ asset('/assets/datatables-buttons/js/dataTables.buttons.min.js') }}" defer></script>
    <script src="{{ asset('/assets/datatables-buttons/js/buttons.html5.min.js') }}" defer></script>
    <script src="{{ asset('/assets/js/bootstrap.bundle.min.js') }}"></script>
    @yield('js')
</body>

</html>
