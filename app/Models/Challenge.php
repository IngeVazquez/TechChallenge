<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    use HasFactory;
    // El modelo asume la siguiente linea:
    // protected $table = 'challenges';
    // asume que el nombre de la tabla es el plural de su nombre:  Modelo-> Challenge = challenges <-Tabla

    protected $fillable = ['titulo','descripcion','img'];

    public function user(){
        $this->belongsTo('App\Models\User');
    }
}
