@extends('layouts.admin')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mt-2 mb-2 w-100">
    <h1 class="h3 text-gray-800 m-0"><i class="fas fa-fw fa-tachometer-alt"></i> Información General<br>
        <font class="text-cCases text-bold" style="font-size:15px;"><a id="mTitle" style="font-size:15px;">Todas las Plantas</a></font>
    </h1>
    <div class="text-right">
        <font class="text-xs m-0 p-0">
            <p class="m-0">**Actualizado: {{ date('d-m-Y') }}</p>
        </font>
    </div>
</div>
    @role('admin-otra-plataforma')
    {{-- Código HTML a mostrar si el usuario tiene el rol 'admin-plantas' --}}
    <div id="gantt_here" style='width:100%; height:100%;'></div>
    @endrole

    @role('admin-plantas')
    {{-- Código HTML a mostrar si el usuario tiene el rol 'admin-plantas' --}}
    <div class="row">
    </div>
    @endrole
    @endsection
    @section('js')
    <script src="{{ asset('common/testdata.js') }}"></script>
    @role('admin-otra-plataforma')
    <script>
        gantt.config.touch = "force";
        gantt.init("gantt_here");
        gantt.parse(demo_tasks);
    </script>
    @endrole
    @endsection
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            Datatables Responsive
            $("#tblAsistencias").DataTable({
                responsive: true,
                dom: 'Bfrtip',
                order: [[1, 'desc']],
                buttons: [
                    'excel', 'pdf'
                ]
            });
        });
    </script>
