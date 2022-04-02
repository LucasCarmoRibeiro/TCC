<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chamado extends Model
{
    use HasFactory;


    protected $table = 'chamados';


 protected $fillable = [

    'titulo',
    'nome_solicitante',
    'CPF',
    'email',
    'data_abertura',
    'data_fechamento',
    'descricao_problema',
    'solucao',
    'status',
    'nome_laboratorio',
    'responsavel'
    ];



    public function equipamento(){
        return $this->belongsToMany(Equipamento::class);
    }
    
   
    


}
