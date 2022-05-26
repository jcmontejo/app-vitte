{{-- Extends layout --}}
@extends('layouts.default')
{{-- Content --}}
@section('content')
    <div class="card card-custom">
        <form action="/plant/plant/{{ $obj->getUrl() }}" method="POST">
            <div class="card-body">
                @csrf
                {{ method_field($obj->getMethod()) }}
                <input type="hidden" name="dblCatPlant" class="form-control" value="{{ $obj->dblCatPlant }}" />
                @if ($obj->dblCatPlant>0)
                <div class="row">
                    <div class="form-group col-md-4">
                        {!! QrCode::color(0,100,0)->size(200)->generate($obj->dblCatPlant) !!}
                    </div>
                </div>
                @endif
                <div class="row">
                    <div class="form-group col-md-4">
                        <label>Nombre<span class="text-danger">*</span></label>
                        <input type="text" name="strName" class="form-control @error('strName') is-invalid @enderror"
                            placeholder="Introduce nombre" value="{{ old('strName') ?? $obj->strName }}" />
                        @error('strName')
                            <div class="fv-plugins-message-container">
                                <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                    <strong>{{ $message }}</strong>
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-8">
                        <label>Dirección<span class="text-danger">*</span></label>
                        <input type="text" name="strAddress" class="form-control @error('strAddress') is-invalid @enderror"
                            placeholder="Introduce dirección"
                            value="{{ old('strAddress') ?? $obj->strAddress }}" />
                        @error('strAddress')
                            <div class="fv-plugins-message-container">
                                <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                    <strong>{{ $message }}</strong>
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label>Latitud<span class="text-danger">*</span></label>
                        <input type="text" name="intLongitude" class="form-control @error('intLongitude') is-invalid @enderror"
                            placeholder="Introduce latitud"
                            value="{{ old('intLatitude') ?? $obj->intLatitude }}" />
                        @error('intLatitude')
                            <div class="fv-plugins-message-container">
                                <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                    <strong>{{ $message }}</strong>
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label>Longitud<span class="text-danger">*</span></label>
                        <input type="text" name="intLongitude" class="form-control @error('intLongitude') is-invalid @enderror"
                            placeholder="Introduce longitud"
                            value="{{ old('intLongitude') ?? $obj->intLongitude }}" />
                        @error('intLongitude')
                            <div class="fv-plugins-message-container">
                                <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                    <strong>{{ $message }}</strong>
                                </div>
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="/plant/plant" class="btn btn-sm btn-secondary mr-2"><i class="fas fa-undo"></i>
                    Atras</a>
                <button type="submit" class="btn btn-sm btn-success btn-save-form"><i class="fas fa-check"></i>
                    Guardar</button>
            </div>
        </form>
    </div>
@endsection
{{-- Styles Section --}}
@section('styles')
    <link href="{{ asset('plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection
{{-- Scripts Section --}}
@section('scripts')
    {{-- vendors --}}
    <script src="{{ asset('plugins/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>
    <script>
        $(document).ready(function() {})
    </script>
@endsection
