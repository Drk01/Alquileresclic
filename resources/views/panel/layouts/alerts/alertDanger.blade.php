@if ($message == "Por favor cree su perfíl antes de continuar")
<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
        &times;
    </button>
    <h5><i class="icon fas fa-ban"></i> ¡Atención!</h5>
    Por favor <a href="{{ route('editMyProfile') }}">cree su perfíl</a> antes de continuar
</div>
@else
<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
        &times;
    </button>
    <h5><i class="icon fas fa-ban"></i> ¡Atención!</h5>
    {{ $message }}
</div>
@endif
