@extends('layout.navbar')
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
	   icon: 'Cartão deletado com sucesso!',
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
    </ul>

    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-ficha" role="tabpanel" aria-labelledby="pills-ficha-tab">

            <form class="form-horizontal" method="post" action="{{ route('funcionarios.update', $funcionarios->id) }}">
                @csrf
                <div class="container-fluid" style="padding-left: 40em;padding-top: 2em">
                    <div class="card" style="width: 18rem">
                        <div class="card-body" >
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="nome" class="control-label">Nome</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" required id="nome" name="nome"
                                        value="{{ isset($funcionarios->nome) ? $funcionarios->nome : old('nome') }}" >
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
                                <button type="submit" class="btn btn-outline-secondary btn-sm">Salvar</button>
                        </div>
                    </div>
                </div>
            </form>



        </div>

        <div class="tab-pane fade show active" id="pills-cartao" role="tabpanel" aria-labelledby="pills-ficha-cartao">




            
        </div>
    </div>
   
    </div>
</body>
@endsection