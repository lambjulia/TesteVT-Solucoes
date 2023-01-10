@extends('layout.navbar')
@section('title', 'Home')
@section('content')
<div class="container col-md-9" style="padding-left: 200px; position: center">
    <div class="row mb-6">
        <div class="col-md-12 text-center">
            <h3><strong>Funcionários</strong></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 style="float: left;"><strong>Pacientes Cadastradas</strong></h5>
                    <button class="btn btn-sm btn-primary" style="float: right;" data-toggle="modal" data-target="#addModal">Novo Cadastro</button>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Telefone</th>
                                <th style="text-align: center;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($operadoras as $o)
                            <tr>
                                <td>{{ $o->id }}</td>
                                <td>{{ $o->nome }}</td>
                                <td>{{ $o->cnpj }} </td>
                                        <td style="text-align: center;">
                                            <button class="btn btn-sm btn-secondary">Ver</button>
                                            <button class="btn btn-sm btn-primary">Editar</button>
                                            <button class="btn btn-sm btn-danger">Deletar</button>
                                        </td>
                                    </tr>
                             @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
