{{-- @extends('app')
@section('content')
    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header text-center">Login</h3>
                        <div class="card-body">
                            <form method="POST" action="{{ route('login.custom') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email" id="email" class="form-control" name="email"
                                        required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Password" id="password" class="form-control"
                                        name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Signin</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection --}}
<!--

=========================================================
* Volt Pro - Premium Bootstrap 5 Dashboard
=========================================================

* Product Page: https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard
* Copyright 2021 Themesberg (https://www.themesberg.com)
* License (https://themes.getbootstrap.com/licenses/)

* Designed and coded by https://themesberg.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. Please contact us to request a removal.

-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title>App Vitte - Inicio de sesión</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Control de Nomina - Inicio de sesión">
    <meta name="author" content="Juan Carlos Montejo">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/img/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('/assets/img/favicon/safari-pinned-tab.svg') }}" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Sweet Alert -->
    <link type="text/css" href="{{ asset('vendor/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">
    <!-- Notyf -->
    <link type="text/css" href="{{ asset('vendor/notyf/notyf.min.css') }}" rel="stylesheet">
    <!-- Volt CSS -->
    <link type="text/css" href="{{ asset('/css/volt.css') }}" rel="stylesheet">
    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->
</head>

<body>
    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->
    <main>
        <!-- Section -->
        <section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center form-bg-image"
                    data-background-lg="{{ asset('/assets/img/illustrations/signin.svg') }}">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="bg-white shadow border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                            <div class="text-center text-md-center mb-4 mt-md-0">
                                <h1 class="mb-0 h3">Plataforma de Control Operativo</h1>
                                <h1 class="mb-0 h3">Vitte Inicio de Sesión</h1>
                            </div>
                            <form method="POST" action="{{ route('login.custom') }}" class="mt-4">
                                @csrf
                                <!-- Form -->
                                <div class="form-group mb-4">
                                    <label for="email">Usuario</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">
                                            <svg class="icon icon-xs text-gray-600" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                                                </path>
                                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z">
                                                </path>
                                            </svg>
                                        </span>
                                        <input type="email" class="form-control" placeholder="EJE.: maria@dominio.com"
                                            id="email" name="email" required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <!-- End of Form -->
                                <div class="form-group">
                                    <!-- Form -->
                                    <div class="form-group mb-4">
                                        <label for="password">Contraseña</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon2">
                                                <svg class="icon icon-xs text-gray-600" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                            <input type="password" placeholder="**********" class="form-control"
                                                id="password" name="password" required>
                                            @if ($errors->has('password'))
                                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <!-- End of Form -->
                                    <div class="d-flex justify-content-between align-items-top mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="remember">
                                            <label class="form-check-label mb-0" for="remember">
                                                Recordar
                                            </label>
                                        </div>
                                        <div><a href="./forgot-password.html" class="small text-right">¿Olvidaste tu
                                                contraseña?</a></div>
                                    </div>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-gray-800">Entrar</button>
                                </div>
                            </form>
                            <div class="d-flex justify-content-center align-items-center mt-4">
                                <span class="fw-normal">
                                    ¿Aún no estas registrado?
                                    <a href="./sign-up.html" class="fw-bold">Crear cuenta</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Core -->
    <script src="{{ asset('/vendor/@popperjs/core/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- Vendor JS -->
    <script src="{{ asset('/vendor/onscreen/dist/on-screen.umd.min.js') }}"></script>
    <!-- Slider -->
    <script src="{{ asset('/vendor/nouislider/distribute/nouislider.min.js') }}"></script>
    <!-- Smooth scroll -->
    <script src="{{ asset('/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
    <!-- Charts -->
    <script src="{{ asset('/vendor/chartist/dist/chartist.min.js') }}"></script>
    <script src="{{ asset('/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>
    <!-- Datepicker -->
    <script src="{{ asset('/vendor/vanillajs-datepicker/dist/js/datepicker.min.js') }}"></script>
    <!-- Sweet Alerts 2 -->
    <script src="{{ asset('/vendor/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>
    <!-- Moment JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>
    <!-- Vanilla JS Datepicker -->
    <script src="{{ asset('/vendor/vanillajs-datepicker/dist/js/datepicker.min.js') }}"></script>
    <!-- Notyf -->
    <script src="{{ asset('/vendor/notyf/notyf.min.js') }}"></script>
    <!-- Simplebar -->
    <script src="{{ asset('/vendor/simplebar/dist/simplebar.min.js') }}"></script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Volt JS -->
    <script src="{{ asset('/assets/js/volt.js') }}"></script>
</body>

</html>
