<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permitido extends Model
{
    protected $table='usu_permitidos';
    protected $fillable = [
         'nombreUsu', 'permiso'
    ];
}
