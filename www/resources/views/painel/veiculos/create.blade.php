@extends('layouts.app')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Cadastro de Veículo</h2>
                </div>
                <div class="card-body">
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

                    <form action="{{ route('veiculos.store') }}" method="POST">
                        @csrf

                         <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Cliente:</strong>
                                    <select class="form-control" name="cliente_id" placeholder="Cliente">
                                        <option value="">Selecione...</option>
                                        @foreach($clientes as $cliente)
                                            <option value="{{ $cliente->id }}" {{ old("cliente_id") == $cliente->id ? "selected":"" }}>{{ $cliente->nome }}</option>
                                        @endforeach
                                      </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Marca:</strong>
                                    <input type="text" name="marca" class="form-control" placeholder="Marca" value="{{ old('marca') }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Modelo:</strong>
                                    <input type="text" name="modelo" class="form-control" placeholder="Modelo" value="{{ old('modelo') }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Placa:</strong>
                                    <input type="text" name="placa" class="form-control" placeholder="Placa" value="{{ old('placa') }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <a class="btn btn-secondary btn-default" href="{{ route('veiculos.index') }}"> Voltar </a>
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
