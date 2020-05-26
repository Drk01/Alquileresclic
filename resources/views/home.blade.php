@extends('panel.layouts.panel')

@section('subtitle') Inicio @endsection
@section('content')
@if (session()->has('message'))
@include('panel.layouts.alerts.alertSuccess', ['message' => session('message')])
@endif
<h2>Hola mundo</h2>
@endsection
