@extends('panel.layouts.panel')

@section('title')
Comprar paquetes
@endsection

@section('subtitle')
Comprar paquetes
@endsection

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h3>Bronce</h3>
                </div>

                <div class="card-text">
                    <h2 class="text-center">$150,000</h2>
                    En este paquete usted podrá subir hasta 5 anuncios.
                </div>

                <button class="btn mt-3 btn-primary btn-block btn-lg">Comprar</button>
            </div>

        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h3>Plata</h3>
                </div>
                <div class="card-text">
                    <h2 class="text-center">$600,000</h2>
                    En este paquete usted podrá subir hasta 20 anuncios.
                </div>

                <button class="btn mt-3 btn-primary btn-block btn-lg">Comprar</button>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h3>Oro</h3>
                </div>
                <div class="card-text">
                    <h2 class="text-center">
                        $1,500,000
                    </h2>
                    En este paquete usted podrá subir hasta 20 anuncios.
                </div>

                <button class="btn mt-3 btn-primary btn-block btn-lg">Comprar</button>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h3>Diamante</h3>
                </div>
                <div class="card-text">
                    <h2 class="text-center">
                        $3,000,000
                    </h2>
                    En este paquete usted podrá subir hasta 20 anuncios.
                </div>

                <button class="btn mt-3 btn-primary btn-block btn-lg">Comprar</button>
            </div>
        </div>
    </div>
</div>
@endsection
