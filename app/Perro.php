<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perro extends Model
{
    protected $fillable = [
        'foto', 'raza', 'tamano', 'color'
    ];

    protected $filter = [
        'id', 'foto', 'raza', 'tamano', 'color'
    ];

    public static function initialize(){
        return[
            'foto' => '', 'raza' => '', 'tamano' => '', 'color' => ''
        ];
    }
}
