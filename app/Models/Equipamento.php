<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipamento extends Model
{
    use HasFactory;


    protected $table = 'equipamentos';


 protected $fillable = [
        'tipo',
        'Numero',
        'id_setores'
    ];

   

    public function Laboratorios()
    {       
        //return $this->belongsTo('App\Models\Laboratorio','name');    
        return $this->HasOne(Laboratorio::class,'id', 'id_setores');    }

        public function Chamado(){
            return $this->belongsToMany(Chamado::class);
        }
    }


