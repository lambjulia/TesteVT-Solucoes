@extends('layout.main')
@section('title', 'Home')
@section('content')
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<div class="container-fluid" style="width: 60em">

    <div class="row mb-6">
        <div class="col-md-12 text-center">
            <h3><strong>Funcionários</strong></h3>
        </div>
    </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 style="float: left;"><strong>Funcionários Cadastrados</strong></h5>
                        <a class="btn btn-sm btn-primary" style="float: right;" href="{{route('funcionarios.create')}}">Novo Cadastro</a>
                    </div>

                <div class="card-body">
                    <table class="table table-bordered" id="tabela">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>CPF</th>
                                <th>Telefone</th>
                                <th>Saldo Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($funcionarios as $f)
                            <tr>
                                <td>{{ $f->id }}</td>
                                <td>{{ $f->nome }}</td>
                                <td>{{ $f->cpf }}</td>
                                <td>{{ $f->telefone }}</td>
                                <td>R${{ $f->valor() }}</td>
                                <td>
                                    <a class="btn btn-sm btn-primary" href="{{route('funcionarios.ficha', $f->id)}}">Consultar Ficha</a>
                                    <form method="POST" action="{{route('funcionarios.delete', $f->id)}}" style="display: inline" onsubmit="return confirm('Deseja realmente excluir este funcionário?');" >
                                    @csrf
                                    @method("DELETE")
                                    <button class="btn btn-danger btn-sm">Excluir</button>
                                    </form>
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
<script>
  $(document).ready(function () {
    $('#tabela').DataTable({
        select: false,
        responsive: true,
        "order": [
            [0, "asc"]
        ],
        "info": false,
        "sLengthMenu": false,
        "bLengthChange": false,
        "oLanguage": {
            "sEmptyTable": "Nenhum registro encontrado",
            "sInfo": "Mostrando de START até END de TOTAL registros",
            "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
            "sInfoFiltered": "(Filtrados de MAX registros)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "MENU resultados por página",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum registro encontrado",
            "sSearch": "Pesquisar:",
            "oPaginate": {
                "sNext": " Próximo",
                "sPrevious": "Anterior ",
                "sFirst": "Primeiro",
                "sLast": "Último"
            },
            "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
            }
        }
    });
});
</script>
</html>
@endsection