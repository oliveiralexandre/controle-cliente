@extends('layouts.app')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Editar Mensalidade</h2>
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

                    <form action="{{ route('mensalidades.update', $mensalidade->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Contratos:</strong>
                                    <select class="form-control" name="contrato_id" placeholder="Contratos">
                                        <option value="">Selecione...</option>
                                        @foreach($contratos as $contrato)
                                            <option value="{{ $contrato->id }}" {{ $contrato->id == $mensalidade->contrato_id ? 'selected="selected"' : '' }}>{{ $contrato->id }}</option>
                                        @endforeach
                                      </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Data de vencimento:</strong>
                                    <input type="text" name="data_vencimento" value="{{ $mensalidade->data_vencimento }}" class="form-control" placeholder="Data de vencimento">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <a class="btn btn-secondary btn-default" href="{{ route('mensalidades.index') }}"> Voltar </a>
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
