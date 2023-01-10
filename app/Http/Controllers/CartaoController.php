<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cartoes;
use App\Operadoras;

class CartaoController extends Controller
{
    public function create() {

        $operadoras = Operadoras::all();

        return view('cartoes.create', compact('operadoras'));
    }

    public function store(Request $request) {

        $operadora = new Operadoras();
        $operadora->cnpj = $request->input('cnpj');
        $operadora->nome = $request->input('nome');
        $operadora->save();

        return redirect()->route('cartoes')->with('store', '402');
    }

    public function cartoes() {
        $cartoes = Cartoes::all();

        return view('cartoes.cartoes', compact('cartoes'));
    }

    public function edit($id) {
        $operadoras = Operadoras::find($id);

        return view('cartoes.edit', compact('operadoras'));
    }
    
    public function update(Request $request, $id) {

        $operadoras = Operadoras::find($id);
        $operadoras->cnpj = $request->input('cnpj');
        $operadoras->nome = $request->input('nome');
        $operadoras->update();

        return redirect()->route('cartoes')->with('update', '402');
    }
 
    public function delete($id)
    {
        $operadoras = Operadoras::find($id);
        $operadoras->delete();
        return redirect()->route('cartoes')->with('delete', '402');
    }

}
