@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __("Register") }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label
                                for="name"
                                class="col-md-4 col-form-label text-md-right"
                                >{{ __("Name") }}</label
                            >

                            <div class="col-md-6">
                                <input
                                    id="name"
                                    type="text"
                                    class="form-control @error('name') is-invalid @enderror"
                                    name="name"
                                    value="{{ old('name') }}"
                                    required
                                    autocomplete="name"
                                    autofocus
                                />

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label
                                for="lastname"
                                class="col-md-4 col-form-label text-md-right"
                                >Apellido paterno</label
                            >

                            <div class="col-md-6">
                                <input
                                    id="lastname"
                                    type="text"
                                    class="form-control @error('lastname') is-invalid @enderror"
                                    name="lastname"
                                    value="{{ old('lastname') }}"
                                    required
                                    autocomplete
                                    autofocus
                                />

                                @error('lastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label
                                for="motherLastname"
                                class="col-md-4 col-form-label text-md-right"
                                >Apellido materno</label
                            >

                            <div class="col-md-6">
                                <input
                                    id="motherLastname"
                                    type="text"
                                    class="form-control @error('motherLastname') is-invalid @enderror"
                                    name="motherLastname"
                                    value="{{ old('motherLastname') }}"
                                    required
                                    autocomplete
                                    autofocus
                                />

                                @error('motherLastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label
                                for="phone"
                                class="col-md-4 col-form-label text-md-right"
                                >Teléfono</label
                            >

                            <div class="col-md-6">
                                <input
                                    id="phone"
                                    type="text"
                                    class="form-control @error('phone') is-invalid @enderror"
                                    name="phone"
                                    value="{{ old('phone') }}"
                                    required
                                    autocomplete
                                    autofocus
                                />

                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label
                                for="email"
                                class="col-md-4 col-form-label text-md-right"
                                >{{ __("E-Mail Address") }}</label
                            >

                            <div class="col-md-6">
                                <input
                                    id="email"
                                    type="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    name="email"
                                    value="{{ old('email') }}"
                                    required
                                    autocomplete="email"
                                />

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label
                                for="password"
                                class="col-md-4 col-form-label text-md-right"
                                >{{ __("Password") }}</label
                            >

                            <div class="col-md-6">
                                <input
                                    id="password"
                                    type="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    name="password"
                                    required
                                    autocomplete="new-password"
                                />

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label
                                for="password-confirm"
                                class="col-md-4 col-form-label text-md-right"
                                >{{ __("Confirm Password") }}</label
                            >

                            <div class="col-md-6">
                                <input
                                    id="password-confirm"
                                    type="password"
                                    class="form-control"
                                    name="password_confirmation"
                                    required
                                    autocomplete="new-password"
                                />
                            </div>
                        </div>

                        <div class="form-group row form-check">
                            <input
                                type="checkbox"
                                name="ageValidation"
                                id="ageValidation"
                                class="form-check-input"
                                required
                            />
                            <label for="ageValidation" class="form-check-label"
                                >Confirmo que soy mayor de edad.</label
                            >
                        </div>

                        <div class="form-group row form-check">
                            <input
                                type="checkbox"
                                name="terms&condition"
                                id="terms&condition"
                                class="form-check-input"
                                required
                            />
                            <label
                                for="terms&condition"
                                class="form-check-label"
                                >Acepto los términos y condiciones de
                                uso.</label
                            >
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __("Register") }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
