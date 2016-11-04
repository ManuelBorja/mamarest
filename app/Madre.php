<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Madre extends Model
{
    protected $fillable = ['dni','nombres','apellidos','celular','celular_acompanante','fecha_parto','historia','historia_familiar','user_id', ];

    protected $hidden = [
        'user_id',
    ];

}
