@extends('layout.main')
@section('title', 'Operadoras')
@section('content')
@if(session('store'))
    <script>
	Swal.fire({
	   icon: 'success',
	   title: 'Operadora cadastrada com sucesso!',
	   showConfirmButton: false,
	   timer: 1500
	})
	</script>	
@endif
@if(session('update'))
    <script>
	Swal.fire({
	   icon: 'success',
	   title: 'Operadora alterada com sucesso!',
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
<div class="container col-md-9" style="width: 60em">
    <div class="row mb-6">
        <div class="col-md-12 text-center">
            <h3><strong>Operadoras</strong></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 style="float: left;"><strong>Operadoras Cadastradas</strong></h5>
                    <a class="btn btn-sm btn-primary" style="float: right;" href="{{route('operadora.create')}}" >Novo Cadastro</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>CNPJ</th>
                                <th style="text-align: center;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($operadoras as $o)
                            <tr>
                                <td>{{ $o->id }}</td>
                                <td>{{ $o->nome }}</td>
                                <td>{{ $o->cnpj }} </td>
                                        <td>
                                            <a class="btn btn-sm btn-primary" href="{{route('operadora.edit', $o->id)}}" >Editar</a>
                                            <form method="POST" action="{{route('operadora.delete', $o->id)}}" style="display: inline" onsubmit="return confirm('Deseja realmente Excluir esta operadora?');" >
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
