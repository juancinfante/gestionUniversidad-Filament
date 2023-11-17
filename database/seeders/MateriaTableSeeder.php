<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Materia;


class MateriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $carrera1 = new Materia;
        $carrera1->nombre = 'Algebra';
        $carrera1->duracion = 'cuatrimestral';
        $carrera1->horas = '150';
        $carrera1->carrera_id = 1;
        $carrera1->save();
        
        $carrera2 = new Materia;
        $carrera2->nombre = 'Analisis';
        $carrera2->duracion = 'anual';
        $carrera2->horas = '150';
        $carrera2->carrera_id = 2;
        $carrera2->save();
        
        $carrera3 = new Materia;
        $carrera3->nombre = 'Logica';
        $carrera3->duracion = 'cuatrimestral';
        $carrera3->horas = '120';
        $carrera3->carrera_id = 3;
        $carrera3->save();
        
        $carrera4 = new Materia;
        $carrera4->nombre = 'Algebra II';
        $carrera4->duracion = 'cuatrimestral';
        $carrera4->horas = '125';
        $carrera4->carrera_id = 1;
        $carrera4->save();
        
        $carrera5 = new Materia;
        $carrera5->nombre = 'Analisis II';
        $carrera5->duracion = 'cuatrimestral';
        $carrera5->horas = '125';
        $carrera5->carrera_id = 2;
        $carrera5->save();
        
        $carrera6 = new Materia;
        $carrera6->nombre = 'Logica II';
        $carrera6->duracion = 'anual';
        $carrera6->horas = '150';
        $carrera6->carrera_id = 1;
        $carrera6->save();
        
        $carrera1 = new Materia;
        $carrera1->nombre = 'Programacion';
        $carrera1->duracion = 'cuatrimestral';
        $carrera1->horas = '50';
        $carrera1->carrera_id = 6;
        $carrera1->save();
        
        $carrera1 = new Materia;
        $carrera1->nombre = 'Fundamentos de la Programacion';
        $carrera1->duracion = 'anual';
        $carrera1->horas = '150';
        $carrera1->carrera_id = 5;
        $carrera1->save();
        
        $carrera1 = new Materia;
        $carrera1->nombre = 'Algebra Lineal';
        $carrera1->duracion = 'cuatrimestral';
        $carrera1->horas = '50';
        $carrera1->carrera_id = 1;
        $carrera1->save();
    }
}
