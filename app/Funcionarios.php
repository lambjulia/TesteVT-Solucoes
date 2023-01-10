<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionarios extends Model
{
    protected $fillable = [
        'nome','cpf','data_de_nascimento', 'telefone', 'email', 'cartao_id'];

    public function cartoes()
    {
        return $this->hasMany('App\Cartoes');
    } 
}
