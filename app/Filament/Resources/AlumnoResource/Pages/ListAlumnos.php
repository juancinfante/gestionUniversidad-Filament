<?php

namespace App\Filament\Resources\AlumnoResource\Pages;

use App\Filament\Resources\AlumnoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\AlumnoResource\Widgets\AlumnoStatsOverview;
class ListAlumnos extends ListRecords
{
    protected static string $resource = AlumnoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

        // protected function getHeaderWidgets(): array {
        //     return [
        //         AlumnoStatsOverview::class,
        //     ];
        // }
}
