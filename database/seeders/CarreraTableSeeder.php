<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Carrera;

class CarreraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $carrera1 = new Carrera;
        $carrera1->nombre = 'Ingeniería Industrial';
        $carrera1->duracion = 5;
        $carrera1->save();

        $carrera2 = new Carrera;
        $carrera2->nombre = 'Ingeniería Eléctrica';
        $carrera2->duracion = 5;
        $carrera2->save();

        $carrera3 = new Carrera;
        $carrera3->nombre = 'Ingeniería Civil';
        $carrera3->duracion = 5;
        $carrera3->save();

        $carrera4 = new Carrera;
        $carrera4->nombre = 'Ingeniería Eléctromecanica';
        $carrera4->duracion = 5;
        $carrera4->save();

        $carrera5 = new Carrera;
        $carrera5->nombre = 'Ingeniería en Sistemas';
        $carrera5->duracion = 5;
        $carrera5->save();

        $carrera6 = new Carrera;
        $carrera6->nombre = 'Analista en Sistemas';
        $carrera6->duracion = 4;
        $carrera6->save();

        $carrera7 = new Carrera;
        $carrera7->nombre = 'Programador';
        $carrera7->duracion = 4;
        $carrera7->save();

        $carrera8 = new Carrera;
        $carrera8->nombre = 'Licenciatura en Matematica';
        $carrera8->duracion = 5;
        $carrera8->save();

        $carrera9 = new Carrera;
        $carrera9->nombre = 'Licenciatura en Quimica';
        $carrera9->duracion = 5;
        $carrera9->save();

        $carrera10 = new Carrera;
        $carrera10->nombre = 'Licenciatura en Psicologia';
        $carrera10->duracion = 5;
        $carrera10->save();

    }
}
