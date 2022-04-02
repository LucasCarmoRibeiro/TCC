<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chamado_equipamento extends Model
{
    use HasFactory;
    protected $table = 'chamado_equipamento';

    protected $fillable = [
   
        'Chamado_id',
        'equipamento_id'
        ];
}
