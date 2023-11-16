<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;

    protected $table ='materia';

    protected $fillable = [
        'nombre',
        'duracion',
        'horas',
        'carrera_id'
    ];

    public function carrera(){
        return $this->belongsTo(Carrera::class);
    }
    public function regHistorico(){
        return $this->hasMany(RegHistorico::class);
    }
}
