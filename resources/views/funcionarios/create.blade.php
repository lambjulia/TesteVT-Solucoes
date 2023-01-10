@extends('layout.navbar')
@section('title', 'Cadastrar')
@section('content')
<body>
    <form class="form-horizontal" method="post" action="{{ route('funcionarios.store') }}">
        @csrf
        <div class="container-fluid" style="padding-left: 40em;padding-top: 5em">
            <div class="card" style="width: 18rem">
                <div class="card-body" >
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="nome" class="control-label">Nome</label>
                            <div class="input-group">
                                <input type="text" class="form-control" required id="nome" name="nome"
                                    placeholder="Nome Completo">
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="cpf" class="control-label">CPF</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="cpf" name="cpf"
                                    placeholder="000.000.000.00">
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="data_de_nascimento" class="control-label">Data de Nascimento</label>
                            <div class="input-group">
                                <input type="date" class="form-control" id="data_de_nascimento" name="data_de_nascimento">
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="telefone" class="control-label">Telefone</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="telefone" name="telefone"
                                placeholder="(00)0.0000.0000">
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="email" class="control-label">Email</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="email" name="email"
                                placeholder="xxxxx@gmail.com">
                            </div>
                        </div>
                    </div>
                        <button type="submit" class="btn btn-outline-secondary btn-sm">Salvar</button>
                </div>
            </div>
        </div>
    </form>
</body>
@endsection