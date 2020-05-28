@extends('panel.layouts.panel') @section('title') Listado de usuarios
@endsection @section('subtitle') Listado de usuarios @endsection
@section('content')
<table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Usuario</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>
                {{ $user->name }} {{ $user->lastname }}
                {{ $user->mothersLastname }}
            </td>
            <td>
                @if ($user->block)
                <button
                    class="btn btn-danger btn-sm"
                    onclick="block({{ $user->id }})"
                    id="block{{ $user->id }}"
                >
                    Desbloquear
                </button>
                @else
                <button
                    class="btn btn-success btn-sm"
                    onclick="block({{ $user->id }})"
                    id="block{{ $user->id }}"
                >
                    Bloquear
                </button>
                @endif @if (auth()->user()->role == 1) @switch($user->role)
                @case(0)
                <button
                    class="btn btn-primary btn-sm"
                    id="role{{ $user->id }}"
                    onclick="role({{ $user->id }})"
                >
                    Hacer supervisor
                </button>
                @break @case(2)
                <button
                    class="btn btn-primary btn-sm"
                    id="role{{ $user->id }}"
                    onclick="role({{ $user->id }})"
                >
                    Hacer usuario
                </button>
                @break @default
                <button class="btn btn-primary btn-sm">
                    Este usuario es Administrador
                </button>
                @endswitch @endif

                @if( auth()->user()->role == 1)
                    <button class="btn btn-success btn-sm" id="confianza{{ $user->id }}" onclick="confianza({{ $user->id }})">Hacer anunciante de confianza</button>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<script>
    window.onload = () => {
        $("#example1").DataTable();

        block = function(id) {
            $.ajax({
                type: "POST",
                url: `${route("blockUser", id).url()}`,
                success: function(response) {
                    if ($("#block" + id).hasClass("btn-danger")) {
                        $("#block" + id)
                            .removeClass("btn-danger")
                            .addClass("btn-success")
                            .html("Bloquear");
                    } else {
                        $("#block" + id)
                            .removeClass("btn-success")
                            .addClass("btn-danger")
                            .html("Desbloquear");
                    }
                },
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                    _token: $('meta[name="authApiToken"]').attr("content")
                }
            });
        };

        role = function(id) {
            $.ajax({
                type: "POST",
                url: `${route("userRoleChanger", id).url()}`,
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                    _token: $('meta[name="authApiToken"]').attr("content")
                },
                success(resp) {
                    if (
                        $("#role" + id)
                            .text()
                            .trim() == "Hacer supervisor"
                    ) {
                        $("#role" + id).html("Hacer usuario");
                    } else {
                        $("#role" + id).html("Hacer supervisor");
                    }
                },
                error(resp) {
                    console.log(resp);
                }
            });
        };

        confianza = function(id){

            $.ajax({
                type: "POST",
                url: `${route('toggleConfianza')}`,
                data: {
                    id
                },
                success: function (response) {
                    if($('#confianza'+id).hasClass('btn-success')){
                        $('#confianza'+id).removeClass('btn-success').addClass('btn-danger').html('Quitar anunciante de confianza')
                    }else{
                        $('#confianza'+id).removeClass('btn-danger').addClass('btn-success').html('Hacer anunciante de confianza');
                    }
                },
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                    _token: $('meta[name="authApiToken"]').attr("content")
                }
            });
        }
    };
</script>
@endsection
