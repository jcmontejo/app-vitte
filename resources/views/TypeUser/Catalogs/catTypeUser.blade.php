{{-- Extends layout --}}
@extends('layouts.default')
{{-- Content --}}
@section('content')
    <div class="card card-custom">
        <form action="/type_user/type_user/{{ $user_type->getUrl() }}" method="POST">
            <div class="card-body">
                @csrf
                {{ method_field($user_type->getMethod()) }}
                <div class="form-group">
                    <label>Tipo de Usuario<span class="text-danger">*</span></label>
                    <input type="text" name="strTypeUser" class="form-control @error('strTypeUser') is-invalid @enderror"
                        placeholder="Tipo de Usuario" value="{{ old('strTypeUser') ?? $user_type->strTypeUser }}" />
                    <input type="hidden" name="dblCatTypeUser" class="form-control"
                        value="{{ $user_type->dblCatTypeUser }}" />
                    @error('strTypeUser')
                        <div class="fv-plugins-message-container">
                            <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                    @enderror
                </div>
            </div>
            <div class="card-footer">
                <a href="/type_user/type_user" class="btn btn-sm btn-secondary mr-2"><i class="fas fa-undo"></i>
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
