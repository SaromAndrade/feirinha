<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
            protected $table = 'usuario'; 
            protected $fillable = ['name', 'data_nasc', 'cpf', 'avaliacao', 'idlogin' ];
}
