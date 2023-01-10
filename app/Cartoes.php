<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cartoes extends Model
{
    protected $fillable = [
        'nome','saldo','operadora_id'];

    public function operadora()
    {
        return $this->belongsTo(Operadoras::class);
    }  
 
    // public function funcionarios()
    // {
    //     return $this->hasMany('App\Funcionarios');
    // } 
}
