<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio de sesión | {{ env('APP_NAME') }}</title>

    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                @if (!$errors->isEmpty())
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="register-box ">
                    <h2 class="registerTitle">Registro</h2>
                    <p>Es rápido y fácil</p>
                    <hr>
                    <form action="{{ route('register') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <label for="name">Nombre: </label>
                            </div>
                            <div class="col-8">
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="lastnames">Apellidos: </label>
                            </div>
                            <div class="col-8">
                                <input type="text" name="lastnames" id="lastnames" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="phone">Teléfono: </label>
                            </div>
                            <div class="col-8">
                                <div class="row">
                                    <div class="col-3">
                                        <input type="text" class="form-control" name="indicative" id="indicative"
                                            placeholder="57">
                                    </div>
                                    <div class="col">
                                        <input type="text" name="phone" id="phone" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="email">Email: </label>
                            </div>
                            <div class="col-8">
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="password">Contraseña: </label>
                            </div>
                            <div class="col-8">
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="password_confirmation">Confirmación de contraseña: </label>
                            </div>
                            <div class="col-8">
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="checkboxes-div">
                            <div class="row form-check">
                                <input type="checkbox" name="ageValidation" id="ageValidation" class="form-check-input">
                                <label class="form-check-label" for="ageValidation">Confirmo que soy mayor de edad:
                                </label>
                            </div>
                            <div class="row form-check">
                                <input type="checkbox" name="terms&condition" id="terms&condition"
                                    class="form-check-input">
                                <label class="form-check-label" for="terms&condition">Acepto <a
                                        href="{{ route('terminos') }}">términos y condiciones de
                                        uso</a>.
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-danger btn-lg mt-3 mb-3 submitbutton">Registro</button>
                    </form>
                </div>
            </div>

            <div class="col">
                <div class="login-box">
                    <h2 class="login-title">Acceder</h2>
                    <hr>
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="email">Correo electrónico</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña: </label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="remember" id="remember" class="form-check-input">
                            <label for="remember" class="form-check-label">Recuérdame</label>
                        </div>
                        <div class="form-group row" hidden>
                            <div class="col offset-2">
                                <div class="g-recaptcha" data-sitekey="{{ env('CAPTCHA_SITE_KEY') }}"></div>
                                @if ($errors->has('g-recaptcha-response'))
                                <span class="invalid-feedback" style="display: block;">
                                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <button type="submit" class="btn btn-danger btn-lg float-right">Acceder</button>
                    </form>

                    <a href="{{ route('facebookRedirectToProvider') }}" class="btn btn-primary btn-lg FacebookButton">
                        <span class="socialLoginLink">Accede con
                            Facebook</span></a>
                    <a href="{{ route('googleRedirectToProvider') }}" class="btn btn-danger btn-lg GoogleButton"> <span
                            class="socialLoginLink">Accede con Google</span></a>
                </div>


            </div>
        </div>
    </div>
</body>

</html>
