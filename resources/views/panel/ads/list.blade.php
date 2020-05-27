@extends('panel.layouts.panel')

@section('title')
Moderar anuncios
@endsection

@section('subtitle')
Moderación de anuncios
@endsection

@section('content')
<table id="example2" class="table table-bordered table-hover">
    <thead>
    <tr>
      <th>Anuncio</th>
      <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($ads as $ad)
    <tr>
        <td>{{ $ad->title }}</td>
        <td>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg{{ $ad->id }}">
                Moderar anuncio
            </button>
            @include('panel.ads.layouts.largeModal', ['ad' => $ad])
        </td>
      </tr>
    @endforeach
    </tbody>
    <tfoot>
      <tr>
        <td>Anuncio</td>
        <td>Acciones</td>
      </tr>
    </tfoot>
  </table>

  <script>
      window.onload = function(){

        $('#example2').DataTable();

        rechazar = function(id) {
            console.log(id);

            $.ajax({
                type: "POST",
                url: `${route('rejectAd')}`,
                data: {
                    id
                },
                success: function (response) {
                    window.location.reload(false);
                },
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                    _token: $('meta[name="authApiToken"]').attr("content")
                }
            });
        }

        aceptar = function (id){
            console.log(id);
            $.ajax({
                type: "POST",
                url: `${route('acceptAd')}`,
                data: {
                    id
                },
                success: function (response) {
                    window.location.reload(false);
                },
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                    _token: $('meta[name="authApiToken"]').attr("content")
                }
            });
        }
      }
  </script>

@endsection
