@extends('layout.main')
@section('title', 'Cadastrar')
@section('content')
<body>
    <form class="form-horizontal" method="post" action="{{ route('operadora.update', $operadoras->id) }}">
        @csrf
        <div class="container-fluid" style="padding-left: 40em;padding-top: 2em">
            <div class="card" style="width: 30rem">

                <div class="card-header">
                    <h4 class="col-12 modal-title text-center">Editar Operadora</h5>
                </div>

                <div class="card-body">
                    <div class="form-row">

                        <div class="form-group col-md-12">
                            <label for="cnpj" class="control-label">CNPJ</label>
                            <div class="input-group">
                                <input type="text" class="form-control" required id="cnpj" name="cnpj"
                                value="{{ isset($operadoras->cnpj) ? $operadoras->cnpj : old('cnpj') }}" >
                            </div>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="nome" class="control-label">Nome da Empresa</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="nome" name="nome"
                                value="{{ isset($operadoras->nome) ? $operadoras->nome : old('nome') }}">
                            </div>
                        </div>

                    </div>
                </div>

                <div class="card-footer text-muted">
                    <button type="submit" class="btn btn-secondary btn-sm">Salvar</button>
                    <a href="{{ route('operadoras') }}" class="btn btn-secondary btn-sm"> Voltar</a>
                </div>

            </div>
        </div>
    </form>
</body>
@endsection