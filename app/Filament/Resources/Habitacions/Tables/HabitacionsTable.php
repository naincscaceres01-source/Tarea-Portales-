<?php

namespace App\Filament\Resources\Habitacions\Tables;

use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\BulkActionGroup;
use Filament\Tables;
use Filament\Tables\Table;

class HabitacionesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('imagen')
                    ->label('Foto')
                    ->circular(),

                Tables\Columns\TextColumn::make('nombre')
                    ->label('Habitación')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('capacidad')
                    ->label('Capacidad'),

                Tables\Columns\TextColumn::make('precio')
                    ->label('Precio/Noche')
                    ->money('USD')
                    ->sortable(),

                Tables\Columns\IconColumn::make('disponible')
                    ->label('Disponible')
                    ->boolean(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Fecha de Creación')
                    ->dateTime('d/m/Y H:i')
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('disponible')
                    ->label('Disponibilidad'),
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}