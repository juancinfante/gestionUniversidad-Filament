<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AlumnoResource\Pages;
use App\Filament\Resources\AlumnoResource\RelationManagers;
use App\Filament\Resources\AlumnoResource\Widgets\AlumnoStatsOverview;
use App\Models\Alumno;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Filters\SelectFilter;


class AlumnoResource extends Resource
{
    protected static ?string $model = Alumno::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make('nombre')
                ->required(),
                Forms\Components\TextInput::make('apellido')
                ->required(),
                Forms\Components\TextInput::make('telefono')
                ->required(),
                Forms\Components\TextInput::make('dni')
                ->numeric()
                ->required(),
                Forms\Components\TextInput::make('legajo')
                ->required(),
                Forms\Components\Select::make('estado')
                ->options([
                    'activo' => 'Activo',
                    'inactivo' => 'Inactivo',
                ])
                ->native(false),
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
                ->sortable()
                ->label('Nombre'),
                Tables\Columns\TextColumn::make('apellido')
                ->label('Apellido'),
                Tables\Columns\TextColumn::make('dni')
                ->searchable()
                ->label('DNI'),
                Tables\Columns\TextColumn::make('telefono')
                ->label('Telefono'),
                Tables\Columns\TextColumn::make('legajo')
                ->searchable()
                ->sortable()
                ->label('Legajo'),
                Tables\Columns\TextColumn::make('estado')
                ->label('Estado'),
                Tables\Columns\TextColumn::make('carrera.nombre')
                ->label('Carrera'),
            ])
            ->filters([
                //
                SelectFilter::make('estado')
                ->options([
                    'activo' => 'Activo',
                    'inactivo' => 'Inactivo',
                ])
                
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
            RelationManagers\RegHistoricoRelationManager::class
        ];
    }

    public static function getWidgets(): array{
            return [
                AlumnoStatsOverview::class,
            ];
    }
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAlumnos::route('/'),
            'create' => Pages\CreateAlumno::route('/create'),
            'edit' => Pages\EditAlumno::route('/{record}/edit'),
        ];
    }
}
