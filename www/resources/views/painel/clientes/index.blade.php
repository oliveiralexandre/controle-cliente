@extends('layouts.app')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-4 mb-2">
            <div class="pull-right">
                <a class="btn btn-primary btn-default" href="{{ route('clientes.create') }}"> Novo Cliente </a>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Listagem de Clientes</h2>
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

                    {{-- <table class="table table-hover ">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Título</th>
                                <th scope="col">Descrição</th>
                                <th scope="col">URL</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody data-bind="foreach: banners">
                            <tr>
                                <td scope="row" data-bind="text: id"></td>
                                <td><span data-bind="text: title"></span></td>
                                <td><span data-bind="text: description"></span></td>
                                <td><span data-bind="text: url"></span></td>
                                <td class="center">
                                    <i class="mdi mdi-pencil" aria-hidden="true" data-bind="click: edit"></i>
                                    <i class="mdi mdi-delete" aria-hidden="true" data-bind="click: remove"></i>
                                </td>
                            </tr>
                        </tbody>
                    </table> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
