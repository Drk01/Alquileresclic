@extends('panel.layouts.panel')

@section('subtitle') Inicio @endsection
@section('content')
@if (session()->has('message'))
@include('panel.layouts.alerts.alertSuccess', ['message' => session('message')])
@endif

@if (session('dangerMessage'))
@include('panel.layouts.alerts.alertDanger', ['message' => session('dangerMessage')])
@endif
<div class="row">
    <div class="col">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $remainingAds }}</h3>

                <p>Anuncios restantes</p>
            </div>
            <div class="icon">
                <i class="fas fa-ad"></i>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $uploadedAds }}</h3>
                <p>Anuncios subidos</p>
            </div>
            <div class="icon">
                <i class="fas fa-ad"></i>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $rating }} / 5</h3>
                <p>Tu rating</p>
            </div>
            <div class="icon">
                <i class="fas fa-star"></i>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $favoritesCounter }}</h3>
                <p>Anuncios favoritos</p>
            </div>
            <div class="icon">
                <i class="fas fa-star"></i>
            </div>
        </div>
    </div>
</div>
@endsection
