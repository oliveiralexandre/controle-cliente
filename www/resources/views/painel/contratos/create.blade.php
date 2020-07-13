@extends('layouts.app')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Cadastro de Contrato</h2>
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

                    <form action="{{ route('contratos.store') }}" method="POST">
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
                                    <strong>Produto:</strong>
                                    <select class="form-control" name="produto_id" placeholder="Produto">
                                        <option value="">Selecione...</option>
                                        @foreach($produtos as $produto)
                                            <option value="{{ $produto->id }}" {{ old("produto_id") == $produto->id ? "selected":"" }}>{{ $produto->nome }}</option>
                                        @endforeach
                                      </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Data Contrato:</strong>
                                    <input type="text" name="data_contrato" class="form-control" placeholder="Data Contrato" value="{{ old('data_contrato') }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Data de Vencimento do Contrato:</strong>
                                    <input type="text" name="data_vencimento_contrato" class="form-control" placeholder="Data de Vencimento do Contrato" value="{{ old('data_vencimento_contrato') }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Dia Vencimento:</strong>
                                    <input type="text" name="dia_vencimento" class="form-control" placeholder="Dia Vencimento" value="{{ old('dia_vencimento') }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <a class="btn btn-secondary btn-default" href="{{ route('contratos.index') }}"> Voltar </a>
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
