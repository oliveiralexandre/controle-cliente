@extends('auth.app')

@section('content')
<body class="" id="body">
    <div class="container d-flex flex-column justify-content-between vh-100">
        <div class="row justify-content-center mt-5">
            <div class="col-xl-5 col-lg-6 col-md-10">
                <div class="card">
                    <div class="card-header bg-primary">
                        <div class="app-brand">
                            <a href="{{ route('home') }}">
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

                        <h4 class="text-dark mb-5">Registrar</h4>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row">
                                <div class="form-group col-md-12 mb-4">
                                    <input id="name" type="text" class="input-lg form-control @error('name') is-invalid @enderror"
                                    aria-describedby="nameHelp" placeholder="Nome" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-12 mb-4">
                                    <input id="email" type="email" class="input-lg form-control @error('email') is-invalid @enderror"
                                        aria-describedby="emailHelp" placeholder="Username" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-12">
                                    <input id="password" type="password" class="input-lg form-control @error('password') is-invalid @enderror"
                                        placeholder="Senha" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-12">
                                    <input id="password-confirm" type="password" class="input-lg form-control"
                                        placeholder="Confirmar Senha" name="password_confirmation" required autocomplete="new-password">
                                </div>

                                <div class="form-group mb-0 col-md-12">
                                    <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">
                                        {{ __('Registrar') }}
                                    </button>
                                    <p>Já tem uma conta?
                                        <a class="text-blue" href="{{ route('login') }}">Entrar</a>
                                    </p>
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
