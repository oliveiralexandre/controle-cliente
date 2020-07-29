@extends('layouts.app')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-4 mb-2">
            <div class="pull-right">
                <a class="btn btn-primary btn-default" href="{{ route('mensalidades.create') }}"> Nova Mensalidade </a>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Listagem de Mensalidades</h2>
                </div>

                <div class="card-body">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <table class="table table-bordered">
                        <tr>
                            <th>Id</th>
                            <th>Cliente</th>
                            <th>Produto</th>
                            <th>Status</th>
                            <th>Data Lançamento</th>
                            <th>Data Vencimento</th>
                            <th>Data Pagamento</th>
                            <th width="350px">Ações</th>
                        </tr>
                        @foreach ($mensalidades as $mensalidade)
                        <tr>
                            <td>{{ $mensalidade->id }}</td>
                            <td>{{ $mensalidade->contrato->cliente->nome }}</td>
                            <td>{{ $mensalidade->contrato->produto->nome }}</td>
                            <td>{{ $mensalidade->status }}</td>
                            <td>{{ $mensalidade->data_lancamento }}</td>
                            <td>{{ $mensalidade->data_vencimento }}</td>
                            <td>{{ $mensalidade->data_pagamento }}</td>
                            <td>
                                <form action="{{ route('mensalidades.destroy', $mensalidade->id) }}" method="POST">

                                    <a class="btn btn-secondary" href="{{ $mensalidade->init_point }}">Boleto</a>

                                    <a class="btn btn-info" href="{{ route('mensalidades.show', $mensalidade->id) }}">Detalhes</a>

                                    <a class="btn btn-primary" href="{{ route('mensalidades.edit', $mensalidade->id) }}">Editar</a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>

                    {!! $mensalidades->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
