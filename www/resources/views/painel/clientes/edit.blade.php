@extends('layouts.app')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Editar Cliente</h2>
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

                    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Nome:</strong>
                                    <input type="text" name="nome" value="{{ $cliente->nome }}" class="form-control" placeholder="Nome">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>CPF:</strong>
                                    <input type="text" name="cpf" value="{{ $cliente->cpf }}" class="form-control" placeholder="CPF">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>E-mail:</strong>
                                    <input type="text" name="email" value="{{ $cliente->email }}" class="form-control" placeholder="E-mail">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Data de aniversário:</strong>
                                    <input type="text" name="data_aniversario" value="{{ $cliente->data_aniversario }}" class="form-control" placeholder="Data de aniversário">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Cep:</strong>
                                    <input type="text" name="cep" value="{{ $cliente->cep }}" class="form-control" placeholder="Cep">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Endereço:</strong>
                                    <input type="text" name="endereco" value="{{ $cliente->endereco }}" class="form-control" placeholder="Endereço">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Número:</strong>
                                    <input type="text" name="numero" value="{{ $cliente->numero }}" class="form-control" placeholder="Número">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Complemento:</strong>
                                    <input type="text" name="complemento" value="{{ $cliente->complemento }}" class="form-control" placeholder="Complemento">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Bairro:</strong>
                                    <input type="text" name="bairro" value="{{ $cliente->bairro }}" class="form-control" placeholder="Bairro">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Cidade:</strong>
                                    <input type="text" name="cidade" value="{{ $cliente->cidade }}" class="form-control" placeholder="Cidade">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Estado:</strong>
                                    <input type="text" name="estado" value="{{ $cliente->estado }}" class="form-control" placeholder="Estado">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Telefone:</strong>
                                    <input type="text" name="telefone" value="{{ $cliente->telefone }}" class="form-control" placeholder="Telefone">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <a class="btn btn-secondary btn-default" href="{{ route('clientes.index') }}"> Voltar </a>
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
