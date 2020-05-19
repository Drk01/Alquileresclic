@extends('panel.layouts.panel')

@section('title')
Editar perfil
@endsection

@section('subtitle')
Editar perfil
@endsection

@section('content')
<div class="row">
    <div class="col-5">
        <div class="form-group">
            <label for="name">Nombre: </label>
            <input type="text" name="name" id="name" class="form-control" value="{{ auth()->user()->name }}">
        </div>
        <div class="form-group">
            <label for="lastname">Apellido paterno: </label>
            <input type="text" name="lastname" id="lastname" class="form-control"
                value="{{ auth()->user()->lastname }}">
        </div>
        <div class="form-group">
            <label for="mothersLastname">Apellido materno: </label>
            <input type="text" name="mothersLastname" id="mothersLastname" class="form-control"
                value="{{ auth()->user()->mothersLastname }}">
        </div>
        <div class="form-group">
            <label for="phone">Teléfono: </label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{ auth()->user()->phone }}">
        </div>
        <div class="form-group">
            <label for="type">Tipo de anunciante: </label>
            <select name="type" id="type" class="form-control">
                <option value=""></option>
            </select>
        </div>
    </div>

    <div class="col-5">
        <div class="form-group">
            <label for="publicName ">Nombre público: </label>
            <input type="text" name="publicName" id="publicName" class="form-control"
                @isset(auth()->user()->profile()->name)
            value="{{ auth()->user()->profile()->name }}"
            @endisset>
        </div>
        <div class="form-group">
            <label for="city">Ciudad: </label>
            <input type="text" class="form-control" id="city" name="city" @isset(auth()->user()->profile()->city)
            value="{{ auth()->user()->profile()->city }}"
            @endisset>
        </div>
        <div class="form-group">
            <label for="address">Dirección: </label>
            <textarea name="address" id="address" cols="15" rows="5" class="form-control">@isset(auth()->user()->profile()->address)
                {{ auth()->user()->profile()->address }}
            @endisset</textarea>
        </div>
        <div class="form-group">
            <input type="button" value="Actualizar datos" onclick="sendData()" class="btn btn-primary float-right btn-lg">
        </div>
    </div>
</div>

<script>
    window.onload = function (){
        sendData = function() {

        }
    }
</script>
@endsection
