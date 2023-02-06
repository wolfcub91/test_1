<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredienti extends Model
{
    protected $table = 'ingredienti';
    protected $primaryKey = 'id';

    public function ingredienti()
    {
        return $this->belongsToMany(Dolci::class, 'ingredienti_dolci', 'id_ingrediente', 'id_dolce');

    }
}
