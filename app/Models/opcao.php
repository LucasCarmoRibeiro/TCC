<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class opcao extends Model
{
    use HasFactory;
    protected $table = 'opcoes';

    protected $fillable = [
        'opcao',
    ];
}
