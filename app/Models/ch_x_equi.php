<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ch_x_equi extends Model
{
    use HasFactory;
    protected $table = 'ch_x_equi';


    protected $fillable = [
   
       'id_chamados',
       'id_equipamentos'
       ];



    

}
