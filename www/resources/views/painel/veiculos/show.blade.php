@extends('layouts.app')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Detalhes do Veículo</h2>
                </div>
                <div class="card-body">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Cliente:</strong>
                            {{ $veiculo->cliente->nome }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $veiculo->marca }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Modelo:</strong>
                            {{ $veiculo->modelo }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Placa:</strong>
                            {{ $veiculo->placa }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <a class="btn btn-secondary btn-default" href="{{ route('veiculos.index') }}"> Voltar </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
