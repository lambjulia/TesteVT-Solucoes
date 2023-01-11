<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionarios;
use App\Cartoes;
use DB;

class FuncionarioController extends Controller
{
    public function create() {

        $funcionarios = Funcionarios::all();

        return view('funcionarios.create');
    }

    public function store(Request $request) {

        $funcionarios = new Funcionarios();
        $funcionarios->nome = $request->input('nome');
        $funcionarios->cpf = $request->input('cpf');
        $funcionarios->data_de_nascimento = $request->input('data_de_nascimento');
        $funcionarios->telefone = $request->input('telefone');
        $funcionarios->email = $request->input('email');
        $funcionarios->save();

        return redirect()->route('funcionarios')->with('store', '402');
    }

    public function funcionarios() {

        $funcionarios = Funcionarios::all();
        $cartoes = Cartoes::all();

        return view('funcionarios.funcionarios', compact('funcionarios', 'cartoes'));
    }

    public function edit($id) {
        $funcionarios = Funcionarios::find($id);
        $cartoes = Cartoes::where('funcionario_id', $id)->get();
        $valores = DB::table('cartoes')->select('saldo')->where('funcionario_id', $id)->get();
        $total = $valores->sum('saldo');

        return view('funcionarios.ficha-funcionario', compact('funcionarios', 'cartoes', 'total'));
    }

    public function update(Request $request, $id) {

        $funcionarios = Funcionarios::find($id);
        $funcionarios->nome = $request->input('nome');
        $funcionarios->cpf = $request->input('cpf');
        $funcionarios->data_de_nascimento = $request->input('data_de_nascimento');
        $funcionarios->telefone = $request->input('telefone');
        $funcionarios->email = $request->input('email');
        $funcionarios->update();

        return redirect()->route('funcionarios')->with('update', '402');
    }
 
    public function delete($id)
    {
        $funcionarios = Funcionarios::find($id);
        $funcionarios->delete();
        return redirect()->route('funcionarios')->with('delete', '402');
    }

    public function search() {
        $search = $_GET['query'];
        $funcionarios = Funcionarios::where('nome', 'LIKE', '%' .$search. '%')
       ->orWhere('cpf', 'LIKE', '%' .$search. '%')
       ->orWhere('numero', 'LIKE', '%' .$search. '%')->with('cartoes')->get();

       

    }
}
