<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cartoes extends Model
{
    protected $fillable = [
        'nome','saldo','operadora_id', 'funcionario_id'];

    public function operadora()
    {
        return $this->belongsTo(Operadoras::class);
    }  
 
    public function funcionario()
    {
        return $this->belongsTo(Funcionarios::class);
    }  
 
  
}
