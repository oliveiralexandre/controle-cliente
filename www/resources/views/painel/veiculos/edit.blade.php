@extends('layouts.app')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Editar Veículo</h2>
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

                    <form action="{{ route('veiculos.update', $veiculo->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                         <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Cliente:</strong>
                                    <select class="form-control" name="cliente_id" placeholder="Cliente">
                                        <option value="">Selecione...</option>
                                        @foreach($clientes as $cliente)
                                            <option value="{{ $cliente->id }}" {{ $cliente->id == $veiculo->cliente_id ? 'selected="selected"' : '' }}>{{ $cliente->nome }}</option>
                                        @endforeach
                                      </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Marca:</strong>
                                    <input type="text" name="marca" value="{{ $veiculo->marca }}" class="form-control" placeholder="Marca">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Modelo:</strong>
                                    <input type="text" name="modelo" value="{{ $veiculo->modelo }}" class="form-control" placeholder="Modelo">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Placa:</strong>
                                    <input type="text" name="placa" value="{{ $veiculo->placa }}" class="form-control" placeholder="Placa">
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
