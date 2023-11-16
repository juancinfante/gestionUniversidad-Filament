<?php

namespace App\Filament\Resources\AlumnoResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Filters\SelectFilter;


class RegHistoricoRelationManager extends RelationManager
{
    protected static string $relationship = 'regHistorico';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                    Forms\Components\Select::make('materia_id')
                    ->label('Materia')
                    ->relationship('materia','nombre')
                    ->required(),
                Forms\Components\Select::make('estado_materia')
                    ->options([
                        'aprobado' => 'Aprobado',
                        'desaprobado' => 'Desaprobado',
                        'regular' => 'Regular',
                        'libre' => 'Libre',
                    ]),
                Forms\Components\DatePicker::make('fecha')
                    ->required(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('alumno_id')
            ->columns([
                Tables\Columns\TextColumn::make('materia.nombre'),
                Tables\Columns\TextColumn::make('estado_materia'),
                Tables\Columns\TextColumn::make('fecha'),
            ])
            ->filters([
                //
                SelectFilter::make('estado_materia')
                ->options([
                    'aprobado' => 'Aprobado',
                    'desaprobado' => 'Desaprobado',
                    'regular' => 'Regular',
                    'libre' => 'Libre',
                ]),
                SelectFilter::make('materia')
                ->relationship('materia', 'nombre')
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
