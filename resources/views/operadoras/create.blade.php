@extends('layout.navbar')
@section('title', 'Cadastrar')
@section('content')
<body>
    <form class="form-horizontal" method="post" action="{{ route('operadora.store') }}">
        @csrf
        <div class="container-fluid" style="padding-left: 40em;padding-top: 10em">
            <div class="card" style="width: 18rem">
                <div class="card-body" >
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="cnpj" class="control-label">CNPJ</label>
                            <div class="input-group">
                                <input type="text" class="form-control" required id="cnpj" name="cnpj"
                                    placeholder="04.740.876/0001-25">
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="nome" class="control-label">Nome da Empresa</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="nome" name="nome"
                                    placeholder="Alelo">
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