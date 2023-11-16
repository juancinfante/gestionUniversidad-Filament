<?php

namespace App\Filament\Resources\CarreraResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Carrera;

class CarreraStatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            //
            Stat::make('Cantidad de carreras', Carrera::all()->count()),
        ];
    }
}
