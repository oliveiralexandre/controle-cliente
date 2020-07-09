@extends('clientes.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Listagem de clientes</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('clientes.create') }}"> Novo Cliente </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>E-mail</th>
            <th width="290px">Ações</th>
        </tr>
        @foreach ($clientes as $cliente)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $cliente->nome }}</td>
            <td>{{ $cliente->cpf }}</td>
            <td>{{ $cliente->email }}</td>
            <td>
                <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('clientes.show', $cliente->id) }}">Detalhes</a>

                    <a class="btn btn-primary" href="{{ route('clientes.edit', $cliente->id) }}">Editar</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $clientes->links() !!}

@endsection
