@extends('panel.layouts.panel')

@section('title')
Mis anuncios
@endsection

@section('subtitle')
Mis anuncios <small class="text-muted">(Aprobados)</small>
@endsection

@section('content')
<table id="example2" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Título</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ads as $ad)
        <tr>
            <td>
                {{ $ad->title }}
            </td>
            <td>
                <button class="btn btn-primary btn-sm"><i class="fas fa-edit" data-toggle="modal" data-target="#modal-lg{{ $ad->id }}"></i></button>
                @include('panel.ads.layouts.editAdModal', ['ad' => $ad])
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<script>
    window.onload = function() {
        $('#example2').DataTable();

        saveChanges = function(id) {
            console.log($('#negotiable option:selected').text());


            $.ajax({
                type: "POST"
                , url: route('saveAdChanges')
                , data: {
                    id
                    , 'title': $('#title').val()
                    , 'description': $('#description').val()
                    , 'currency': $('#currency option:selected').text()
                    , 'period': $('#period option:selected').text()
                    , 'negotiable': $('#negotiable option:selected').text()
                    , 'cost': $('#cost').val()
                }
                , success: function(response) {
                    console.log(response);
                }
                , error: function(response) {
                    console.log(response);
                }
                , headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    )
                    , _token: $('meta[name="authApiToken"]').attr("content")
                }

            });
        }
    }

</script>
@endsection
