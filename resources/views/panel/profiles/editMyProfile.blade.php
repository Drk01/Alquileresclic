@extends('panel.layouts.panel') @section('title') Editar perfil @endsection
@section('subtitle') Editar perfil @endsection @section('content')
<div class="row">
    <div class="col" id="feedbackMessage"></div>
</div>
<div class="row">
    <div class="col-5">
        <div class="form-group">
            <label for="name">Nombre: </label>
            <input required type="text" name="name" id="name" class="form-control" value="{{ auth()->user()->name }}" />
        </div>
        <div class="form-group">
            <label for="lastname">Apellidos: </label>
            <input required type="text" name="lastname" id="lastname" class="form-control"
                value="{{ auth()->user()->lastnames }}" />
        </div>
        <div class="form-group">
            <label for="email">Email: </label>
            <input type="email" name="email" class="form-control" id="email" value="{{ auth()->user()->email }}" />
        </div>
        <div class="form-group">
            <label for="phone">Teléfono: </label>
            <div class="row">
                <div class="col-2"><input type="text" value="{{ auth()->user()->indicative }}" class="form-control">
                </div>
                <div class="col">
                    <input required type="text" name="phone" id="phone" class="form-control"
                        value="{{ auth()->user()->phone }}" />
                </div>
            </div>
        </div>
    </div>

    <div class="col-5">
        <div class="form-group">
            <label for="publicName ">Nombre público: </label>
            <input required type="text" name="publicName" id="publicName" class="form-control"
                @isset(auth()->user()->profile->publicName) value="{{ auth()->user()->profile->publicName
            }}" @endisset>
        </div>
        <div class="form-group">
            <label for="type">Tipo de anunciante: </label>
            <select name="type" id="type" class="form-control">
                @isset(auth()->user()->profile->type)
                <option value="{{ auth()->user()->profile->type }}" selected hidden>
                    {{ auth()->user()->profile->type }}</option>
                @endisset
                <option>Alquilador independiente</option>
                <option>Inmobiliaria</option>
                <option>Empresa de alquiler</option>
                <option>Otro</option>
            </select>
        </div>
        <div class="form-group">
            <label for="city">Ciudad: </label>
            <input required type="text" class="form-control" id="city" name="city" @isset(auth()->user()->profile->city) value="{{ auth()->user()->profile->city


            }}" @endisset>
        </div>
        <div class="form-group">
            <label for="address">Dirección: </label>
            <textarea name="address" id="address" cols="15" rows="5"
                class="form-control">@isset(auth()->user()->profile->address){{ auth()->user()->profile->address }} @endisset</textarea>
        </div>
        <div class="form-group">
            <input required type="button" value="Actualizar datos" onclick="sendData({{ auth()->user()->id }})"
                class="btn btn-primary float-right btn-lg" />
        </div>
    </div>
</div>

<script>
    window.onload = function () {
        sendData = function (id) {
            console.log(id);

            $.ajax({
                type: "POST",
                url: `${route("saveProfileChanges", id).url()}`,
                success: function (response) {
                    console.log(response);

                    $("#feedbackMessage").append(`
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> Cambios guardados</h5>
                        Los cambios han sido guardados satisfactoriamente
                    </div>`);
                },
                error: function( resp ){
                    console.log(resp)
                },
                data: {
                    name: $("#name").val(),
                    lastname: $("#lastname").val(),
                    mothersLastname: $("#mothersLastname").val(),
                    phone: $("#phone").val(),
                    type: $("#type").val(),
                    publicName: $("#publicName").val(),
                    city: $("#city").val(),
                    address: $("#address").val(),
                    email: $("#email").val(),
                },
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                    _token: $('meta[name="authApiToken"]').attr("content"),
                },
            });
        };
    };
</script>
@endsection
