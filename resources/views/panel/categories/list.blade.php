@extends('panel.layouts.panel') @section('title') Categorías @endsection
@section('subtitle') Listado de categorías @endsection @section('content')
<table id="datatable" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Categoría</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
            <td>{{ $category->name }}</td>
            <td>
                <button
                    class="btn btn-primary btn-sm"
                    data-toggle="modal"
                    data-target="#modal-default{{ $category->id }}"
                >
                    Editar
                </button>
            </td>
        </tr>

        <div class="modal fade" id="modal-default{{ $category->id }}">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">{{ $category->name }}</h4>
                        <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                        >
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Nombre de la categoría</label>
                            <input
                                type="text"
                                class="form-control"
                                name="name"
                                id="name{{ $category->id }}"
                                value="{{ $category->name }}"
                            />
                        </div>
                        <div class="form-group">
                            <label for="makePrimary"
                                >Hacer categoría principal</label
                            >
                            <input
                                type="checkbox"
                                name="makePrimary{{ $category->id }}"
                                id="makePrimary{{ $category->id }}"
                                onchange="makePrimary({{ $category->id }}, this)"
                            />
                        </div>
                        <div class="form-group">
                            <label for="parent_id">Es subcategoría de</label>
                            <select
                                name="parent_id"
                                id="parent_id{{ $category->id }}"
                                class="form-control"
                            >
                                <option
                                    value="{{ $category->parent_id }}"
                                    >{{ $category->parent_id }}</option
                                >
                                @foreach ($categories as $cat2)
                                <option
                                    value="{{ $cat2->id }}"
                                    >{{ $cat2->name }}</option
                                >
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button
                            type="button"
                            class="btn btn-default"
                            data-dismiss="modal"
                        >
                            Cerrar
                        </button>
                        <button
                            type="button"
                            class="btn btn-primary"
                            onclick="saveEdited({{ $category->id }},
                             $('#name{{ $category->id }}').val(),
                             $('#parent_id{{ $category->id }}').val()  )"
                        >
                            Guardar cambios
                        </button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        @endforeach
    </tbody>
</table>

<script>
    window.onload = function() {
        $("#datatable").DataTable();

        makePrimary = function(id, checkbox) {
            if (checkbox.checked) {
                $("#parent_id" + id)
                    .val("No")
                    .prop("disabled", true);
            } else {
                $("#parent_id" + id).prop("disabled", false);
            }
        };

        saveEdited = function(id, name, subcat) {
            $.ajax({
                type: "POST",
                url: `${route("saveEditedCategory", id).url()}`,
                success: function(response) {
                    window.location.reload(true);
                },
                data: {
                    name,
                    subcat
                },
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                    _token: $('meta[name="authApiToken"]').attr("content")
                }
            });
        };
    };
</script>
@endsection
