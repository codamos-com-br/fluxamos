<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimentacao extends Model
{
    use HasFactory;
    //Uma movimentação pertence a uma conta
    public function products(){
        return $this->belongsTo(Product::class);
    }
}

