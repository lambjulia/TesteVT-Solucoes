@extends('layout.main')
@section('title', 'Home')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="col-12 modal-title text-center">Procure cadastros aqui</h5>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-10 col-lg-8">
                                <div class="card-body row no-gutters align-items-center"> 
                                    <div class="col">
                                        <form action="{{ url('home') }}" method="GET">
                                            <div class="input-group">
                                                <input type="query" class="form-control rounded" placeholder="Digite o dado aqui" aria-label="Search" aria-describedby="search-addon" />
                                                <button type="button" class="btn btn-primary">Pesquise</button>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
