<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $table = 'alumno';

    protected $fillable = [
        'nombre',
        'apellido',
        'dni',
        'telefono',
        'legajo',
        'estado',
        'carrera_id'
    ];

    public function carrera(){
        return $this->belongsTo(Carrera::class);
    }
    public function regHistorico(){
        return $this->hasMany(RegHistorico::class);
    }
}
