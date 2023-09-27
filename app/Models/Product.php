<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name','saldo', 'details'];

    //Varias movimentações pertencem a uma conta
    public function movimentacoes()
    {
        return $this->hasMany(Movimentacao::class, 'movimentacao_id');
    }
}

