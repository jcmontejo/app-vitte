{{-- Extends layout --}}
@extends('layouts.admin')
{{-- Content --}}
@section('content')
    <div class="card">
        <div class="card-header">
            @if ($message)
                <div class="alert alert-success system-message" role="alert">
                    {{ $message }}
                </div>
            @endif
            <h5 class="card-title">Usuarios</h5>
            <a href="{{ url('/user/user/create') }}" class="btn btn-primary float-end mt-n1"><i class="fas fa-plus"></i> Nuevo Usuario</a>
        </div>
        <div class="card-body">
            <table id="tblUsuarios" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                    <tr>
                        <th class="fit-column thColor">Acciones</th>
                        <th class="fit-column thColor">ID</th>
                        <th class="fit-column thColor">Tipo de Usuario</th>
                        <th class="fit-column thColor">Nombre</th>
                        <th class="fit-column thColor">Apellidos</th>
                        <th class="fit-column thColor">Planta de Trabajo</th>
                        <th class="fit-column thColor">Teléfono</th>
                        <th class="fit-column thColor">Correo Electrónico</th>
                        <th class="fit-column thColor">Domicilio Empleado</th>
                    </tr>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($objs as $item)
                        <tr>
                            <td class="text-center">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="/user/user/{{ $item->id }}/edit"><button class="btn btn-success"><i
                                                class="fa-solid fa-pen-to-square"></i></button></a>
                                    <a class="delete" value="{{ $item->dblCatPlant }}"
                                        href="/plant/plant/{{ $item->id }}/edit"><button class="btn btn-danger"><i
                                                class="fa-solid fa-trash"></i></button></a>
                                </div>
                            </td>
                            <td>{{ EmpleadoSerial($item->id) }}</td>
                            <td style='text-align:left'>{{ $item->type_user->strTypeUser ?? '' }}</td>
                            <td style='text-align:left'>{{ $item->name }}</td>
                            <td style='text-align:left'>{{ $item->strLastName }}</td>
                            <td style='text-align:left'>{{ $item->plant->strName ?? '' }}</td>
                            <td style='text-align:left'>{{ $item->intPhoneNumber }}</td>
                            <td style='text-align:left'>{{ $item->email }}</td>
                            <td style='text-align:left'>{{ $item->strAddress }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Datatables Responsive
        $("#tblUsuarios").DataTable({
            responsive: true
        });
    });
</script>