<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegHistorico extends Model
{
    use HasFactory;

    protected $table ='reg_historico';
    
    protected $fillable = [
        'alumno_id',
        'materia_id',
        'estado_materia',
        'fecha',
    ];

    public function alumno(){
        return $this->belongsTo(Alumno::class);
    }
    public function materia(){
        return $this->belongsTo(Materia::class);
    }

}
