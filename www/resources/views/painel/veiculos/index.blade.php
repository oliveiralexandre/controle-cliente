@extends('layouts.app')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-4 mb-2">
            <div class="pull-right">
                <a class="btn btn-primary btn-default" href="{{ route('veiculos.create') }}"> Novo Veículo </a>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Listagem de Veículos</h2>
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
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Placa</th>
                            <th width="290px">Ações</th>
                        </tr>
                        @foreach ($veiculos as $veiculo)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $veiculo->cliente->nome }}</td>
                            <td>{{ $veiculo->marca }}</td>
                            <td>{{ $veiculo->modelo }}</td>
                            <td>{{ $veiculo->placa }}</td>
                            <td>
                                <form action="{{ route('veiculos.destroy', $veiculo->id) }}" method="POST">

                                    <a class="btn btn-info" href="{{ route('veiculos.show', $veiculo->id) }}">Detalhes</a>

                                    <a class="btn btn-primary" href="{{ route('veiculos.edit', $veiculo->id) }}">Editar</a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>

                    {!! $veiculos->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
