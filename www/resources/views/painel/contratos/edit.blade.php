@extends('layouts.app')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Editar Contrato</h2>
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

                    <form action="{{ route('contratos.update', $contrato->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                         <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Cliente:</strong>
                                    <select class="form-control" name="cliente_id" placeholder="Cliente">
                                        <option value="">Selecione...</option>
                                        @foreach($clientes as $cliente)
                                            <option value="{{ $cliente->id }}" {{ $cliente->id == $contrato->cliente_id ? 'selected="selected"' : '' }}>{{ $cliente->nome }}</option>
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
                                            <option value="{{ $produto->id }}" {{ $produto->id == $contrato->produto_id ? 'selected="selected"' : '' }}>{{ $produto->nome }}</option>
                                        @endforeach
                                      </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Data Contrato:</strong>
                                    <input type="text" name="data_contrato" value="{{ $contrato->data_contrato }}" class="form-control" placeholder="Data Contrato">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Data de Vencimento do Contrato:</strong>
                                    <input type="text" name="data_vencimento_contrato" value="{{ $contrato->data_vencimento_contrato }}" class="form-control" placeholder="Data de Vencimento do Contrato">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Dia Vencimento:</strong>
                                    <input type="text" name="dia_vencimento" value="{{ $contrato->dia_vencimento }}" class="form-control" placeholder="Dia Vencimento">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Valor:</strong>
                                    <input type="text" name="valor" value="{{ $contrato->valor }}" class="form-control" placeholder="Valor">
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
