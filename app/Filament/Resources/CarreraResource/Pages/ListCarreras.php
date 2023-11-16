<?php

namespace App\Filament\Resources\CarreraResource\Pages;

use App\Filament\Resources\CarreraResource;
use App\Filament\Resources\CarreraResource\Widgets\CarreraStatsOverview;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCarreras extends ListRecords
{
    protected static string $resource = CarreraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    // protected function getHeaderWidgets(): array {
    //     return [
    //         CarreraStatsOverview::class,
    //     ];
    // }
}
