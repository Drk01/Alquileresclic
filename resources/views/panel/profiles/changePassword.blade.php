@extends('panel.layouts.panel')

@section('title')
Cambiar contraseña
@endsection

@section('subtitle')
    Cambio de contraseña
@endsection

@section('content')
<div class="row">
    <div class="col-5">
        <form action="{{ route('savePassword') }}" method="POST">
        @csrf
            <div class="form-group">
                <label for="oldPassword">Contraseña anterior: </label>
                <input required type="password" name="oldPassword" id="oldPassword" class="form-control">
            </div>
            <div class="form-group">
                <label for="newPassword">Nueva contraseña: </label>
                <input required type="password" name="newPassword" id="newPassword" class="form-control">
            </div>
            <div class="form-group">
                <label for="newPassword_confirmation">Confirme la contraseña: </label>
                <input required type="password" name="newPassword_confirmation" id="newPassword_confirmation" class="form-control">
            </div>
            <input type="submit" value="Actualizar contraseña" class="btn btn-success">
    </form>
    </div>
</div>
@endsection
