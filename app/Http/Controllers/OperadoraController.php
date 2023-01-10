<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operadoras;

class OperadoraController extends Controller
{
    public function create() {
        return view('operadoras.create');
    }

    public function store(Request $request) {

        $operadora = new Operadoras();
        $operadora->cnpj = $request->input('cnpj');
        $operadora->nome = $request->input('nome');
        $operadora->save();

        return redirect()->route('operadoras')->with('store', '402');
    }

    public function operadoras() {
        $operadoras = Operadoras::all();

        return view('operadoras.operadoras', compact('operadoras'));
    }

    public function edit($id) {
        $operadoras = Operadoras::find($id);

        return view('operadoras.edit', compact('operadoras'));
    }
    
    public function update(Request $request, $id) {

        $operadoras = Operadoras::find($id);
        $operadoras->cnpj = $request->input('cnpj');
        $operadoras->nome = $request->input('nome');
        $operadoras->update();

        return redirect()->route('operadoras')->with('update', '402');
    }
 
    public function delete($id)
    {
        $operadoras = Operadoras::find($id);
        $operadoras->delete();
        return redirect()->route('operadoras')->with('delete', '402');
    }

}
