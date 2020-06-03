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
                        <div class="form-group">
                            <label for="title">Título: </label>
                            <input type="text" class="form-control" name="title" id="title" value="{{ $ad->title }}">
                        </div>
                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <textarea name="description" id="description" class="form-control" cols="5" rows="8">{{ $ad->description }}</textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="cost">Precio: </label>
                                <input type="number" name="cost" id="cost" value="{{ $ad->cost }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="currency">Divisa</label>
                                <select name="currency" class="form-control" id="currency">
                                    <option selected disabled hidden value="{{ $ad->currency }}">{{ $ad->currency }}</option>
                                    <option value="USD">USD</option>
                                    <option value="COP">COP</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="period">Periodo: </label>
                                <select class="form-control" name="period" id="period">
                                    <option hidden selected disabled value="{{ $ad->period }}">{{ $ad->period }}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="negotiable">¿Es negociable?</label>
                                <select class="form-control" name="negotiable" id="negotiable">
                                    @if ($ad->negotiable)
                                    <option selected disabled hidden value="Si">Si</option>
                                    @else
                                    <option selected disabled hidden value="No">No</option>
                                    @endif
                                    <option value="Si">Sí</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success" onclick="saveChanges({{ $ad->id }})">Guardar cambios</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
