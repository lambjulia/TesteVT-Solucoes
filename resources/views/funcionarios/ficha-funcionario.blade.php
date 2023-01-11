@extends('layout.main')
@section('title', 'Cadastrar')
@section('content')
@if(session('store'))
    <script>
	Swal.fire({
	   icon: 'success',
	   title: 'Cartão cadastrado com sucesso!',
	   showConfirmButton: false,
	   timer: 1500
	})
	</script>	
@endif
@if(session('update'))
    <script>
	Swal.fire({
	   icon: 'success',
	   title: 'Cartão alterado com sucesso!',
	   showConfirmButton: false,
	   timer: 1500
	})
	</script>	
@endif
@if(session('updatefuncionario'))
    <script>
	Swal.fire({
	   icon: 'success',
	   title: 'Funcionário alterado com sucesso!',
	   showConfirmButton: false,
	   timer: 1500
	})
	</script>	
@endif
@if(session('delete'))
    <script>
	Swal.fire({
	   icon: 'success',
	   title: 'Cartão deletado com sucesso!',
	   showConfirmButton: false,
	   timer: 1500
	})
	</script>	
@endif

<body>
      
    <ul class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="pills-ficha-tab" data-bs-toggle="tab" data-bs-target="#pills-ficha" type="button" role="tab" aria-controls="pills-ficha" aria-selected="true">Ficha Funcionário</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-cartao-tab" data-bs-toggle="tab" data-bs-target="#pills-cartao" type="button" role="tab" aria-controls="pills-cartao" aria-selected="false">Cartões</button>
      </li>
      <li style="padding-left: 70em">Saldo Total: R${{ $total }}</li>
    </ul>

<div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-ficha" role="tabpanel" aria-labelledby="pills-ficha-tab">
            <form class="form-horizontal" method="post" action="{{ route('funcionarios.update', $funcionarios->id) }}">
                @csrf
                <div class="container-fluid" style="padding-left: 28em;padding-top: 1em; height: 800px;">
                    <div class="card" style="width: 40rem">
                        <div class="card-header">
                            <h4 class="col-12 modal-title text-center">Dados do Funcionário</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="nome" class="control-label">Nome Completo</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="nome" name="nome"
                                            placeholder="Nome Completo" 
                                            value="{{ isset($funcionarios->nome) ? $funcionarios->nome : old('nome') }}">
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="cpf" class="control-label">CPF</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="cpf" name="cpf"
                                        value="{{ isset($funcionarios->cpf) ? $funcionarios->cpf : old('cpf') }}" >
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="data_de_nascimento" class="control-label">Data de Nascimento</label>
                                    <div class="input-group">
                                        <input type="date" class="form-control" id="data_de_nascimento" name="data_de_nascimento"
                                        value="{{ isset($funcionarios->data_de_nascimento) ? $funcionarios->data_de_nascimento : old('data_de_nascimento') }}" >
                                    </div>
                                </div>
                        
                                <div class="form-group col-md-12">
                                    <label for="telefone" class="control-label">Telefone</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="telefone" name="telefone"
                                        value="{{ isset($funcionarios->telefone) ? $funcionarios->telefone : old('telefone') }}" >
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="email" class="control-label">Email</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="email" name="email"
                                        value="{{ isset($funcionarios->email) ? $funcionarios->email : old('email') }}" >
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer text-muted">
                            <button type="submit" class="btn btn-outline-secondary btn-sm">Salvar</button>
                          </div>
                    </div>
                </div>
            </form>
</div>

<div class="tab-pane fade show active" id="pills-cartao" role="tabpanel" aria-labelledby="pills-ficha-cartao">

    <div class="container col-md-9" style="padding-left: 200px; position: center">
        <div class="row mb-6">
            <div class="col-md-10 text-center">
                <h3><strong>Cartões</strong></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h5 style="float: left;"><strong>Cartões Cadastrados</strong></h5>

                        <a class="btn btn-sm btn-primary" style="float: right;" href="{{route('cartoes.create', $funcionarios->id)}}">Novo Cadastro</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Número</th>
                                    <th>Saldo</th>
                                    <th>Operadora</th>
                                    <th style="text-align: center;"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cartoes as $c)
                                <tr>
                                    <td>{{ $c->id }}</td>
                                    <td>{{ $c->numero }}</td>
                                    <td>R${{ $c->saldo }} </td>
                                    <td>{{ $c->operadora->nome }} </td>
                                            <td>
                                                <a class="btn btn-sm btn-primary" href="{{route('cartoes.edit', $c->id)}}" >Editar</a>
                                                <form method="POST" action="{{route('cartoes.delete', $c->id)}}" style="display: inline" onsubmit="return confirm('Deseja realmente excluir este cartão?');" >
                                                    @csrf
                                                    @method("DELETE")
                                                    <button class="btn btn-danger btn-sm">Excluir </button>
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


            
        </div>
    </div>
   

</body>
@endsection