@extends('layout.main')
@section('title', 'Home')
@section('content')
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<div class="container-fluid" style="width: 60em">

    <div class="row mb-6">
        <div class="col-md-12 text-center">
            <h3><strong>Funcionários</strong></h3>
        </div>
    </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 style="float: left;"><strong>Pesquisas</strong></h5>
                    </div>

                <div class="card-body">
                    
                        <h6>API de pesquisa do Google:</h6>
                            <div class="gcse-search"></div>
                            
                        <h6>Script de Pesquisa no Blog da VT Soluções</h6>
                        <a href="{{route('blog')}}" class="btn btn-secondary btn-sm">Pesquisar</a>

                        <h6>Script de Pesquisa no Google</h6>
                        <a href="{{route('google')}}" class="btn btn-secondary btn-sm">Pesquisar</a>

                        <h6>Script de Pesquisa no Google no VT Soluções</h6>
                        <a href="{{route('pesquisaVT')}}" class="btn btn-secondary btn-sm">Pesquisar</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
</html>
@endsection