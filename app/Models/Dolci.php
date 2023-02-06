<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dolci extends Model
{
    protected $table = 'dolci';
    protected $primaryKey = 'id';

    public function ingredienti()
    {
        return $this->belongsToMany(Ingredienti::class, 'ingredienti_dolci', 'id_dolce', 'id_ingrediente');

    }

}
