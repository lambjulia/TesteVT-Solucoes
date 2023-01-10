@extends('layout.navbar')
@section('title', 'Cadastrar')
@section('content')
<body>
    <form class="form-horizontal" method="post" action="{{ route('cartoes.store') }}">
        @csrf
        <div class="container-fluid" style="padding-left: 40em;padding-top: 5em">
            <div class="card" style="width: 18rem">
                <div class="card-body" >
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="nome" class="control-label">Nome</label>
                            <div class="input-group">
                                <input type="text" class="form-control" required id="nome" name="nome"
                                    placeholder="Vale Refeição">
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
                        <button type="submit" class="btn btn-outline-secondary btn-sm">Salvar</button>
                </div>
            </div>
        </div>
    </form>
</body>
@endsection