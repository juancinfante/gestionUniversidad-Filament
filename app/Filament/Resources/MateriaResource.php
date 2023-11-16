<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MateriaResource\Pages;
use App\Filament\Resources\MateriaResource\RelationManagers;
use App\Filament\Resources\MateriaResource\Widgets\MateriaStatsOverview;
use App\Models\Materia;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MateriaResource extends Resource
{
    protected static ?string $model = Materia::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make('nombre'),
                Forms\Components\Select::make('duracion')
                ->options([
                    'cuatrimestral' => 'Cuatrimestral',
                    'anual' => 'Anual',
                ])
                ->native(false),
                Forms\Components\TextInput::make('horas'),
                Forms\Components\Select::make('carrera_id')
                ->label('Carrera')
                ->relationship('carrera','nombre')
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
                Tables\Columns\TextColumn::make('carrera.nombre')
                ->searchable()
                ->label('Carrera'),
                Tables\Columns\TextColumn::make('duracion')
                ->label('Duracion'),
                Tables\Columns\TextColumn::make('horas')
                ->label('Horas'),
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
            MateriaStatsOverview::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMaterias::route('/'),
            'create' => Pages\CreateMateria::route('/create'),
            'edit' => Pages\EditMateria::route('/{record}/edit'),
        ];
    }
}
