@extends('default')
@section('content')
    <div class="py-4">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item">
                    <a href="#">
                        <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="#">Empleados</a></li>
                <li class="breadcrumb-item active" aria-current="page">Alta</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Alta Empleado</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mb-4">
            <div class="card border-0 shadow components-section">
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-lg-4 col-sm-6">
                            <!-- Form -->
                            <div class="mb-4">
                                <label for="email">CURP</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="mb-4">
                                <label for="email">Nombre(s)</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="mb-4">
                                <label for="email">Día de Nacimiento</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="mb-4">
                                <label for="email">Sexo</label>
                                <select class="form-select" id="country" aria-label="Default select example">
                                    <option selected>Selecciona sexo</option>
                                    <option value="1">Hombre</option>
                                    <option value="2">Mujer</option>
                                </select>
                            </div>
                            <!-- End of Form -->
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <!-- Form -->
                            <div class="mb-4">
                                <label for="email">RFC</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="mb-4">
                                <label for="email">Primer Apellido</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="mb-4">
                                <label for="email">Mes de Nacimiento</label>
                                <select class="form-select" id="country" aria-label="Default select example">
                                    <option selected>Selecciona mes</option>
                                    <option value="1">Enero</option>
                                    <option value="2">Febrero</option>
                                    <option value="3">Marzo</option>
                                </select>
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="mb-4">
                                <label for="email">Estado de Nacimiento</label>
                                <select class="form-select" id="country" aria-label="Default select example">
                                    <option selected>Selecciona estado</option>
                                    <option value="1">Chiapas</option>
                                </select>
                            </div>
                            <!-- End of Form -->
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <!-- Form -->
                            <div class="mb-4">
                                <label for="email">NSS</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="mb-4">
                                <label for="email">Segundo Apellido</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="mb-4">
                                <label for="email">Año de Nacimiento</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="mb-4">
                                <label class="my-1 me-2" for="country">Estado Civil</label>
                                <select class="form-select" id="country" aria-label="Default select example">
                                    <option selected>Selecciona estado civil</option>
                                    <option value="1">Soltero</option>
                                    <option value="2">Casado</option>
                                </select>
                            </div>
                            <!-- End of Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-4">
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Datos Complementarios</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-8 mb-6">
            <div class="card border-0 shadow components-section">
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-lg-6 col-sm-6">
                            <!-- Form -->
                            <div class="mb-4">
                                <label for="email">Empresa</label>
                                <select class="form-select" id="country" aria-label="Default select example">
                                    <option selected>Selecciona empresa</option>
                                    <option value="1">FAGO</option>
                                    <option value="2">TORRE SUR</option>
                                </select>
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="mb-4">
                                <label for="email">Departamento</label>
                                <select class="form-select" id="country" aria-label="Default select example">
                                    <option selected>Selecciona Departamennto</option>
                                    <option value="1">FAGO</option>
                                    <option value="2">TORRE SUR</option>
                                </select>
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="mb-4">
                                <label for="email">Tipo de Nómina</label>
                                <select class="form-select" id="country" aria-label="Default select example">
                                    <option selected>Selecciona un tipo de nómina</option>
                                    <option value="1">Hombre</option>
                                    <option value="2">Mujer</option>
                                </select>
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="mb-4">
                                <label for="email">Reporte a</label>
                                <select class="form-select" id="country" aria-label="Default select example">
                                    <option selected>Selecciona gerente</option>
                                    <option value="1">Hombre</option>
                                    <option value="2">Mujer</option>
                                </select>
                            </div>
                            <!-- End of Form -->
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <!-- Form -->
                            <div class="mb-4">
                                <label for="email">Fecha de Inicio</label>
                                <input type="date" class="form-control" id="email" aria-describedby="emailHelp">
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="mb-4">
                                <label for="email">Puesto</label>
                                <select class="form-select" id="country" aria-label="Default select example">
                                    <option selected>Selecciona un puesto</option>
                                    <option value="1">Hombre</option>
                                    <option value="2">Mujer</option>
                                </select>
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="mb-4">
                                <label for="email">Monto de Sueldo</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                            </div>
                            <!-- End of Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 mb-6">
            <div class="card border-0 shadow components-section">
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-lg-12 col-sm-12">
                            <!-- Form -->
                            <div class="mb-4">
                                <label for="email">Nombre del Banco</label>
                                <select class="form-select" id="country" aria-label="Default select example">
                                    <option selected>Selecciona un banco</option>
                                    <option value="1">FAGO</option>
                                    <option value="2">TORRE SUR</option>
                                </select>
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="mb-4">
                                <label for="email">Número de Cuenta</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="mb-4">
                                <label for="email">Cuenta CLABE</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
