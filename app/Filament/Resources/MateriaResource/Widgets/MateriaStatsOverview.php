<?php

namespace App\Filament\Resources\MateriaResource\Widgets;

use App\Models\Materia;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class MateriaStatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            //
            Stat::make('Cantidad de Materias', Materia::all()->count()),

        ];
    }
}
