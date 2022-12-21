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
            <h5 class="card-title">Plantas Potabilizadoras</h5>
            <a href="{{ url('/plant/plant/create') }}" class="btn btn-primary float-end mt-n1"><i class="fas fa-plus"></i> Nueva Planta</a>
        </div>
        <div class="card-body">
            <table id="tblPlantas" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                    <tr>
                        <th class="fit-column thColor">Acciones</th>
                        <th class="fit-column thColor">ID</th>
                        <th class="fit-column thColor">Nombre</th>
                        <th class="fit-column thColor">Dirección</th>
                    </tr>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($objs as $item)
                        <tr>
                            <td class="text-center">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="/plant/plant/{{ $item->dblCatPlant }}/edit"><button class="btn btn-success"><i
                                                class="fa-solid fa-pen-to-square"></i></button></a>
                                    <a class="delete" value="{{ $item->dblCatPlant }}"
                                        href="/plant/plant/{{ $item->dblCatPlant }}/edit"><button class="btn btn-danger"><i
                                                class="fa-solid fa-trash"></i></button></a>
                                </div>
                            </td>
                            <td style='text-align:left'>{{ PlantSerial($item->dblCatPlant) }}</td>
                            <td style='text-align:left'>{{ $item->strName }}</td>
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
        $("#tblPlantas").DataTable({
            responsive: true
        });
    });
</script>
