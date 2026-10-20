<?php

namespace App\Filament\Resources\Habitacions\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class HabitacionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre')
                    ->label('Nombre de la Habitación')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Ej. Suite Presidencial'),

                TextInput::make('capacidad')
                    ->label('Capacidad')
                    ->required()
                    ->placeholder('Ej. 2 Personas'),

                TextInput::make('precio')
                    ->label('Precio por Noche')
                    ->numeric()
                    ->prefix('$')
                    ->required()
                    ->placeholder('0.00'),

                Toggle::make('disponible')
                    ->label('Disponible para Reserva')
                    ->default(true),

                TextInput::make('imagen')
                    ->label('URL de la Imagen')
                    ->url()
                    ->required()
                    ->placeholder('https://images.unsplash.com/...'),

                Textarea::make('descripcion')
                    ->label('Descripción / Detalles')
                    ->required()
                    ->rows(4)
                    ->placeholder('Escriba una descripción atractiva para los clientes...'),
            ]);
    }
}