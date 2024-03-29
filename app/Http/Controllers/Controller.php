<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Operadoras;
use App\Cartoes;
use App\Funcionarios;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home() {

        $operadoras = Operadoras::all();
        $funcionarios = Funcionarios::all();
        $cartoes = Cartoes::all();

        return view('home', compact('operadoras', 'funcionarios', 'cartoes'));
    }
}
