@extends('panel.layouts.panel') @section('title') Agrega los datos del anuncio
@endsection @section('subtitle') Agrega los detalles del anuncio @endsection
@section('content')
<div class="row">
    <div class="col">
        <p>
            Usted seleccionó la categoría:
            <a href="{{ route('createAd') }}">{{ $category->name }}</a>
        </p>
    </div>
</div>
<div class="row">
    <div class="col" style="margin: 0 10%;">
        <form action="{{ route('sendToModeration') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Título: </label>
                <input required type="text" name="title" id="title" class="form-control" />
            </div>

            <div class="form-group">
                <label for="description">Descripción: </label>
                <textarea required name="description" id="description" class="form-control" cols="30"
                    rows="10"></textarea>
            </div>
            <div class="row">
                <div class="col">
                    <label for="cost">Precio: </label>
                    <input required type="number" name="cost" id="cost" class="form-control" />
                </div>
                <div class="col">
                    <label for="currency">Divisa: </label>
                    <select required name="currency" id="currency" class="form-control">
                        <option value="USD">USD</option>
                        <option value="COP">COP</option>
                    </select>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="period">Periodo:</label>
                        <select required name="period" id="period" class="form-control">
                            <option value="Hora">Hora</option>
                            <option value="Día">Día</option>
                            <option value="Semanal">Semanal</option>
                            <option value="Mensual">Mensual</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="negotiable">¿Es negociable?</label>
                        <select required name="negotiable" id="negotiable" class="form-control">
                            <option value="true">Si</option>
                            <option value="false">No</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="images">Imágenes:
                        <small class="text-muted">(Puede subir hasta 5 imágenes)</small>
                    </label>
                    <input required type="file" name="images[]" multiple id="images" class="form-control"
                        accept="image/jpg, image/jpeg, image/png" />

                    <input required type="text" id="category" value="{{ $category->id }}" name="category" hidden />
                    <button type="submit" class="btn btn-success btn-lg float-right mt-3">
                        Enviar a moderación
                    </button>
        </form>
    </div>
</div>
</div>
</div>

<script>
    window.onload = function () {
        $("#images").on("change", function () {
            let images = $("#images");

            if (parseInt(images.get(0).files.length) > 5) {
                alert("Solamente puede subir hasta 5 imagenes");
                images.val("");
            }
        });
    };
</script>
@endsection
