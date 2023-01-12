<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cartoes;
use App\Operadoras;
use App\Funcionarios;
class CartaoController extends Controller
{
    public function create(Request $request, $id) {

        $id = request()->route()->parameter('id');
        $operadoras = Operadoras::all();
        $funcionarios = Funcionarios::find($id);

        return view('cartoes.create', compact('id', 'operadoras', 'funcionarios'));
    }

    public function store(Request $request) {

        $cartoes = new Cartoes();
        $cartoes->funcionario_id = $request->input('funcionario_id');
        $operadoras = Operadoras::find($request->input('operadora_id'));
        $cartoes->numero = $request->input('numero');
        $cartoes->saldo = $request->input('saldo');
        $cartoes->operadora()->associate($operadoras);
        $cartoes->save();

        return redirect()->route('funcionarios.ficha', ['id'=>$cartoes->funcionario_id])->with('store', '402');
    }

    public function edit($id) {

        $id = request()->route()->parameter('id');
        $operadoras = Operadoras::all();
        $cartoes = Cartoes::find($id);

        return view('cartoes.edit', compact('operadoras', 'cartoes', 'id'));
    }
    
    public function update(Request $request, $id) {

        $cartoes = Cartoes::find($id);
        $cartoes->numero = $request->input('numero');
        $cartoes->saldo = $request->input('saldo');
        $cartoes->operadora_id = $request->input('operadora_id');
        $cartoes->update();

        return redirect()->route('funcionarios.ficha', ['id'=>$cartoes->funcionario_id])->with('update', '402');
    }
 
    public function delete($id)
    {
        $cartoes = Cartoes::find($id);
        $cartoes->delete();
        return redirect()->route('funcionarios.ficha', ['id'=>$cartoes->funcionario_id])->with('delete', '402');
    }

}
