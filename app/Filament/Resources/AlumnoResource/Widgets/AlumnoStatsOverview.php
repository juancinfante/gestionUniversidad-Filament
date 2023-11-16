<?php

namespace App\Filament\Resources\AlumnoResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Alumno;
class AlumnoStatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Cantidad de Almunos', Alumno::all()->count()),
        ];
    }
}
