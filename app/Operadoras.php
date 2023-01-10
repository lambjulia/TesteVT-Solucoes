<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operadoras extends Model
{
    protected $fillable = [
        'cnpj','nome']; 
 
    public function cartoes()
    {
        return $this->hasMany('App\Cartoes');
    } 
}
