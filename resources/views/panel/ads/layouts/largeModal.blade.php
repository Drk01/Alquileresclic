<div class="modal fade" id="modal-lg{{ $ad->id }}">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">{{ $ad->title }}</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <div class="row">
                <div class="col">
                    <p><b>Descripción: </b> {{ $ad->description }}</p>
                    <p><b>Costo: </b> {{ $ad->cost }}</p>
                    <p><b>Divisa: </b> {{ $ad->currency }}</p>
                    <p><b>¿Es negociable?</b> @if ($ad->negotiable) Si @else No @endif</p>
                </div>
                <div class="col">
                    @include('panel.ads.layouts.toModerateCarousel', ['ad' => $ad])
                </div>
            </div>



        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger" onclick="rechazar({{ $ad->id }})">Rechazar</button>
          <button type="button" class="btn btn-success" onclick="aceptar({{ $ad->id }})">Aceptar</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
