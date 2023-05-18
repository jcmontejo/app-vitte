<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CONTROL OPERATIVO</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('sbadmin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('sbadmin/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/notiflix/dist/notiflix-3.2.6.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/datatables-bs4/css/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/datatables-buttons/css/buttons.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <link href="{{ asset('/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    @yield('css')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('layouts.partials.menu-sbadmin')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    @include('layouts.partials.navbar-sbadmin')
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Vitte App {{ date('Y') }}</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="{{ asset('sbadmin/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{ asset('sbadmin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{ asset('sbadmin/js/sb-admin-2.min.js') }}"></script>

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