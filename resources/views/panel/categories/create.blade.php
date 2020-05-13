@extends('panel.layouts.panel')

@section('title')
Crear categoría
@endsection

@section('subtitle')
Crear categoría
@endsection

@section('content')
<div class="row">
    <div class="col-6">
        @if (session('categoryCreated'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i>Categoría creada satisfactoriamente</h5>
        </div>
        @endif
        <form action="{{ route('postCategory') }}" method="post" autocomplete="off">
            @csrf
            <div class="form-group">
                <label for="name">Inserte el nombre:</label>
                <input type="text" required name="name" id="name" placeholder="Inserte el nombre" class="form-control">
            </div>
            <div class="form-group">
                <label for="parent">¿Es subcategoría de?</label>
                <select name="parent_id" id="parent" class="form-control" required>
                    <option selected>No</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" value="Crear categoría" class="btn btn-success btn-lg ">
        </form>
    </div>
</div>

<script>
    window.onload = function (){
        $('#parent').select2({
            theme: 'bootstrap'
        });
    }
</script>
@endsection
