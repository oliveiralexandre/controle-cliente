@extends('layouts.app')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Cadastro de Cliente</h2>
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

                    <form action="{{ route('clientes.store') }}" method="POST">
                        @csrf

                         <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Nome:</strong>
                                    <input type="text" name="nome" class="form-control" placeholder="Nome" value="{{ old('nome') }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>CPF:</strong>
                                    <input type="text" name="cpf" class="form-control" placeholder="CPF" value="{{ old('cpf') }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>E-mail:</strong>
                                    <input type="text" name="email" class="form-control" placeholder="E-mail" value="{{ old('email') }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Data de aniversário:</strong>
                                    <input type="text" name="data_aniversario" class="form-control" placeholder="Data de aniversário" value="{{ old('data_aniversario') }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Cep:</strong>
                                    <input type="text" name="cep" class="form-control" placeholder="Cep" value="{{ old('cep') }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Endereço:</strong>
                                    <input type="text" name="endereco" class="form-control" placeholder="Endereço" value="{{ old('endereco') }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Número:</strong>
                                    <input type="text" name="numero" class="form-control" placeholder="Número" value="{{ old('numero') }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Complemento:</strong>
                                    <input type="text" name="complemento" class="form-control" placeholder="Complemento" value="{{ old('complemento') }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Bairro:</strong>
                                    <input type="text" name="bairro" class="form-control" placeholder="Bairro" value="{{ old('bairro') }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Cidade:</strong>
                                    <input type="text" name="cidade" class="form-control" placeholder="Cidade" value="{{ old('cidade') }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Estado:</strong>
                                    <input type="text" name="estado" class="form-control" placeholder="Estado" value="{{ old('estado') }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Telefone:</strong>
                                    <input type="text" name="telefone" class="form-control" placeholder="Telefone" value="{{ old('telefone') }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
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
