<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vetrina extends Model
{
    protected $table = 'vetrina';
    protected $primaryKey = 'id';

    public function dolce()
    {
        return $this->belongsTo(Dolci::class,'id_dolce');
    }

}