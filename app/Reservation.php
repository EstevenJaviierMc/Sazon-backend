<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'comensales', 'fecha', 'hora', 'nombres', 'apellidos', 'telefono', 'correo'
    ];
}
