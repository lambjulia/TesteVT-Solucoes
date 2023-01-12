@extends('layout.main')
@section('title', 'Cadastrar')
@section('content')

<body>
    <form class="form-horizontal" method="post" action="{{ route('cartoes.store') }}">
    @csrf
        <input type="hidden" name="funcionario_id" value="{{ $id }}">
            <div class="container-fluid" style="padding-left: 40em;padding-top: 2em">
                <div class="card" style="width: 30rem">

                    <div class="card-header">
                        <h4 class="col-12 modal-title text-center">Cadastrar Cartão</h5>
                    </div>

                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-12">

                                <label for="numero" class="control-label">Número do Cartão</label>

                                <div class="input-group">
                                    <input type="text" class="form-control" required id="numero" name="numero"
                                        placeholder="xxxx-xxxx-xxxx">
                                </div>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="saldo" class="control-label">Saldo</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="saldo" name="saldo"
                                        placeholder="R$400">
                                </div>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="operadora_id" class="control-label">Operadora Pertencente</label>
                                <div class="input-group">
                                    <select id="operadora_id" required="" name="operadora_id" class="form-control">
                                        @foreach ($operadoras as $o)
                                            <option value="{{ $o->id }}">
                                                {{ $o->nome }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card-footer text-muted">
                        <button type="submit" class="btn btn-secondary btn-sm">Salvar</button>
                        <a href="{{ route('funcionarios.ficha', ['id' => $id]) }}" class="btn btn-secondary btn-sm"> Voltar
                            para Ficha</a>
                    </div>

                </div>
            </div>

    </form>
</body>
@endsection
