<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CarreraResource\Pages;
use App\Filament\Resources\CarreraResource\RelationManagers;
use App\Filament\Resources\CarreraResource\Widgets\CarreraStatsOverview;
use App\Models\Carrera;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\SelectColumn;

class CarreraResource extends Resource
{
    protected static ?string $model = Carrera::class;

    protected static ?string $navigationIcon = 'heroicon-o-bookmark-square';



    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make('nombre')
                ->required(),
                Forms\Components\TextInput::make('duracion')
                ->label('Duracion (Años)')
                ->numeric()
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('nombre')
                ->searchable()
                ->label('Nombre'),
                Tables\Columns\TextColumn::make('duracion')
                ->label('Duracion (Años)')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getWidgets(): array{
        return [
            CarreraStatsOverview::class,
        ];
}

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCarreras::route('/'),
            'create' => Pages\CreateCarrera::route('/create'),
            'edit' => Pages\EditCarrera::route('/{record}/edit'),
        ];
    }
}
