@extends('panel.layouts.panel')

@section('title')
Listado de usuarios
@endsection

@section('subtitle')
Listado de usuarios
@endsection

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
            <td>{{ $user->name }} {{ $user->lastname }} {{ $user->mothersLastname }}</td>
            <td>
                @if ($user->block)
                <button class="btn btn-danger btn-sm" id="block">Desbloquear</button>
                @else
                <button class="btn btn-success btn-sm" id="block">Bloquear</button>
                @endif

                @switch($user->role)
                @case(0)
                <button class="btn btn-primary btn-sm">Hacer supervisor</button>
                @break
                @case(2)
                <button class="btn btn-primary btn-sm">Hacer usuario</button>
                @break
                @default
                <button class="btn btn-primary btn-sm">Este usuario es Administrador</button>
                @endswitch
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<script>
    window.onload = () => {
        $("#example1").DataTable();
    }


</script>
@endsection
