<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionarios;

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

        return view('funcionarios.funcionarios', compact('funcionarios'));
    }

    public function edit($id) {
        $funcionarios = Funcionarios::find($id);

        return view('funcionarios.ficha-funcionario', compact('funcionarios'));
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
}
