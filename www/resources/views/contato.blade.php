<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="container">

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Ops!</strong> existem alguns problemas com os campos preenchidos.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="post" action="{{ route('contato.store') }}">
            {{ csrf_field() }}
            <h3>Contato</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                        <input type="text" name="nome" class="form-control" placeholder="Seu nome *" />
                        @if ($errors->has('nome'))
                        <span class="help-block">
                            <strong>{{ $errors->first('nome') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                        <input type="email" name="email" class="form-control" placeholder="Seu Email *" />
                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('assunto') ? ' has-error' : '' }}">
                        <input type="text" name="assunto" class="form-control" placeholder="Assunto *" />
                        @if ($errors->has('assunto'))
                        <span class="help-block">
                            <strong>{{ $errors->first('assunto') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="submit" name="btnSubmit" class="btn btn-primary btn-round btn-sm"
                            value="Enviar mensagem" />

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('mensagem') ? ' has-error' : '' }}">
                        <textarea name="mensagem" class="form-control" placeholder="Sua Mensagem *"
                            style="width: 100%; height: 150px;"></textarea>
                        @if ($errors->has('mensagem'))
                        <span class="help-block">
                            <strong>{{ $errors->first('mensagem') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
