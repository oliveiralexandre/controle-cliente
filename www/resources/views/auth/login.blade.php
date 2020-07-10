@extends('auth.app')

@section('content')

    <body class="" id="body">
        <div class="container d-flex flex-column justify-content-between vh-100">
            <div class="row justify-content-center mt-5">
                <div class="col-xl-5 col-lg-6 col-md-10">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <div class="app-brand">
                                <a href="/index.html">
                                    <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg"
                                        preserveAspectRatio="xMidYMid" width="30" height="33" viewBox="0 0 30 33">
                                        <g fill="none" fill-rule="evenodd">
                                            <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                                            <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                                        </g>
                                    </svg>
                                    <span class="brand-name">Área administrativa</span>
                                </a>
                            </div>
                        </div>
                        <div class="card-body p-5">

                            <h4 class="text-dark mb-5">Logar-se</h4>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-12 mb-4">
                                        <input id="email" type="email" class="input-lg form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                            aria-describedby="emailHelp" placeholder="{{ __('E-Mail') }}" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-12 ">
                                        <input id="password" type="password" class="input-lg form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('Senha') }}" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-md-12">
                                        <div class="d-flex my-2 justify-content-between">
                                            <div class="d-inline-block mr-3">
                                                <label for="remember" class="control control-checkbox">{{ __('Manter-me conectado') }}
                                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                                                    <div class="control-indicator"></div>
                                                </label>

                                            </div>
                                            @if (Route::has('password.request'))
                                                <p><a class="text-blue" href="{{ route('password.request') }}">{{ __('Esqueci minha senha?') }}</a></p>
                                            @endif
                                        </div>
                                        <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">{{ __('Entrar') }}</button>

                                        @if (Route::has('register'))
                                            <p>Não tem uma conta ainda?
                                                <a class="text-blue" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                                            </p>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright pl-0">
                <p class="text-center">&copy; 2018 Copyright Sleek Dashboard Bootstrap Template by
                    <a class="text-primary" href="http://www.iamabdus.com/" target="_blank">Abdus</a>.
                </p>
            </div>
        </div>
    </body>
@endsection
