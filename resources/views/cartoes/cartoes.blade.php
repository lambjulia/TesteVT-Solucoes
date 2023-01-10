@extends('layout.navbar')
@section('title', 'Cartões')
@section('content')
@if(session('store'))
    <script>
	Swal.fire({
	   icon: 'success',
	   title: 'Cartão cadastrada com sucesso!',
	   showConfirmButton: false,
	   timer: 1500
	})
	</script>	
@endif
@if(session('update'))
    <script>
	Swal.fire({
	   icon: 'success',
	   title: 'Cartão alterada com sucesso!',
	   showConfirmButton: false,
	   timer: 1500
	})
	</script>	
@endif
@if(session('delete'))
    <script>
	Swal.fire({
	   icon: 'success',
	   title: 'Operadora deletada com sucesso!',
	   showConfirmButton: false,
	   timer: 1500
	})
	</script>	
@endif
<div class="container col-md-9" style="padding-left: 200px; position: center">
    <div class="row mb-6">
        <div class="col-md-12 text-center">
            <h3><strong>Cartões</strong></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 style="float: left;"><strong>Cartões Cadastrados</strong></h5>
                    <a class="btn btn-sm btn-primary" style="float: right;" href="{{route('cartoes.create')}}" >Novo Cadastro</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Saldo</th>
                                <th>Operadora</th>
                                <th style="text-align: center;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cartoes as $c)
                            <tr>
                                <td>{{ $c->id }}</td>
                                <td>{{ $c->nome }}</td>
                                <td>R${{ $c->saldo }} </td>
                                <td>{{ $c->operadora_id->nome }} </td>
                                        <td>
                                            <a class="btn btn-sm btn-primary" href="{{route('cartoes.edit', $c->id)}}" >Editar</a>
                                            <form method="POST" action="{{route('cartoes.delete', $c->id)}}" style="display: inline" onsubmit="return confirm('Deseja realmente Excluir esta operadora?');" >
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
@endsection
