@extends('layouts.app')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-4 mb-2">
            <div class="pull-right">
                <a class="btn btn-primary btn-default" href="{{ route('contratos.create') }}"> Novo Contrato </a>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Listagem de Contratos</h2>
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
                            <th>Data Contrato</th>
                            <th>Vencimento do Contrato</th>
                            <th>Dia Vencimento</th>
                            <th>Valor</th>
                            <th width="290px">Ações</th>
                        </tr>
                        @foreach ($contratos as $contrato)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $contrato->cliente->nome }}</td>
                            <td>{{ $contrato->produto->nome }}</td>
                            <td>{{ $contrato->data_contrato }}</td>
                            <td>{{ $contrato->data_vencimento_contrato }}</td>
                            <td>{{ $contrato->dia_vencimento }}</td>
                            <td>{{ $contrato->valor }}</td>
                            <td>
                                <form action="{{ route('contratos.destroy', $contrato->id) }}" method="POST">

                                    <a class="btn btn-info" href="{{ route('contratos.show', $contrato->id) }}">Detalhes</a>

                                    <a class="btn btn-primary" href="{{ route('contratos.edit', $contrato->id) }}">Editar</a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>

                    {!! $contratos->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
