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

                <button class="btn mt-3 btn-primary btn-block btn-lg" data-target="#modal-lg-150000"
                    data-toggle="modal">Comprar</button>
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

                <button class="btn mt-3 btn-primary btn-block btn-lg" data-target="#modal-lg-600000"
                    data-toggle="modal">Comprar</button>
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
                    En este paquete usted podrá subir hasta 50 anuncios.
                </div>

                <button class="btn mt-3 btn-primary btn-block btn-lg" data-toggle="modal"
                    data-target="#modal-lg-1500000">Comprar</button>
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
                    En este paquete usted podrá subir hasta 100 anuncios.
                </div>

                <button class="btn mt-3 btn-primary btn-block btn-lg" data-toggle="modal"
                    data-target="#modal-lg-3000000">Comprar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-lg-150000">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Escoja su método de pago</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <form id="payu-150000" method="post"
                            action="https://sandbox.checkout.payulatam.com/ppp-web-gateway-payu/">
                            <input name="merchantId" type="hidden" value="{{ env('PAYUU_MERCHANT_ID') }}">
                            <input name="accountId" type="hidden" value="{{ env('PAYUU_ACCOUNT_ID') }}">
                            <input name="description" type="hidden"
                                value="Compra de 5 créditos de anuncios en Alquilaclic.com">
                            <input name="referenceCode" type="hidden" value="{{ Str::random('255') }}">
                            <input name="amount" type="hidden" value="150000">
                            <input name="currency" type="hidden" value="COP">
                            <input name="signature" type="hidden" value="{{ Str::random('255') }}">
                            <input name="test" type="hidden" value="1">
                            <input name="buyerEmail" type="hidden" value="test@test.com">
                            <input name="responseUrl" type="hidden" value="http://www.test.com/response">
                            <input name="confirmationUrl" type="hidden" value="http://www.test.com/confirmation">
                            <img style="cursor: pointer" src="{{ asset('img/payulatam.png') }}" alt="Pagar con Payu"
                                onclick="$('#payu-150000').submit()">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="modal fade" id="modal-lg-600000">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Escoja su método de pago</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <form method="post" id="payu-600000"
                            action="https://sandbox.checkout.payulatam.com/ppp-web-gateway-payu/">
                            <input name="merchantId" type="hidden" value="{{ env('PAYUU_MERCHANT_ID') }}">
                            <input name="accountId" type="hidden" value="{{ env('PAYUU_ACCOUNT_ID') }}">
                            <input name="description" type="hidden"
                                value="Compra de 20 créditos de anuncios en Alquilaclic.com">
                            <input name="referenceCode" type="hidden" value="{{ Str::random('255') }}">
                            <input name="amount" type="hidden" value="600000">
                            <input name="currency" type="hidden" value="COP">
                            <input name="signature" type="hidden" value="{{ Str::random('255') }}">
                            <input name="test" type="hidden" value="1">
                            <input name="buyerEmail" type="hidden" value="test@test.com">
                            <input name="responseUrl" type="hidden" value="http://www.test.com/response">
                            <input name="confirmationUrl" type="hidden" value="http://www.test.com/confirmation">
                            <img src="{{ asset('img/payulatam.png') }}" alt="Payu" style="cursor: pointer"
                                onclick="$('#payu-600000').submit()">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="modal fade" id="modal-lg-1500000">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Escoja su método de pago</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <form id="payu-1500000" method="post"
                            action="https://sandbox.checkout.payulatam.com/ppp-web-gateway-payu/">
                            <input name="merchantId" type="hidden" value="{{ env('PAYUU_MERCHANT_ID') }}">
                            <input name="accountId" type="hidden" value="{{ env('PAYUU_ACCOUNT_ID') }}">
                            <input name="description" type="hidden"
                                value="Compra de 50 créditos de anuncios en Alquilaclic.com">
                            <input name="referenceCode" type="hidden" value="{{ Str::random('255') }}">
                            <input name="amount" type="hidden" value="1500000">
                            <input name="currency" type="hidden" value="COP">
                            <input name="signature" type="hidden" value="{{ Str::random('255') }}">
                            <input name="test" type="hidden" value="1">
                            <input name="buyerEmail" type="hidden" value="test@test.com">
                            <input name="responseUrl" type="hidden" value="http://www.test.com/response">
                            <input name="confirmationUrl" type="hidden" value="http://www.test.com/confirmation">
                            <img src="{{ asset('img/payulatam.png') }}" onclick="$('#payu-1500000')"
                                style="cursor: pointer">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="modal fade" id="modal-lg-3000000">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Escoja su método de pago</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <form method="post" id="payu-3000000"
                            action="https://sandbox.checkout.payulatam.com/ppp-web-gateway-payu/">
                            <input name="merchantId" type="hidden" value="{{ env('PAYUU_MERCHANT_ID') }}">
                            <input name="accountId" type="hidden" value="{{ env('PAYUU_ACCOUNT_ID') }}">
                            <input name="description" type="hidden"
                                value="Compra de 100 créditos de anuncios en Alquilaclic.com">
                            <input name="referenceCode" type="hidden" value="{{ Str::random('255') }}">
                            <input name="amount" type="hidden" value="3000000">
                            <input name="currency" type="hidden" value="COP">
                            <input name="signature" type="hidden" value="{{ Str::random('255') }}">
                            <input name="test" type="hidden" value="1">
                            <input name="buyerEmail" type="hidden" value="test@test.com">
                            <input name="responseUrl" type="hidden" value="http://www.test.com/response">
                            <input name="confirmationUrl" type="hidden" value="http://www.test.com/confirmation">
                            <img src="{{ asset('img/payulatam.png') }}" alt="Pagar con Payu" style="cursor: pointer"
                                onclick="$('#payu-3000000').submit()">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@endsection
