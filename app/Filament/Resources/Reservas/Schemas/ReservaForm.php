<?php

namespace App\Filament\Resources\Reservas\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Schemas\Schema;

class ReservaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('habitacion_id')
                    ->label('Habitación Reservada')
                    ->relationship('habitacion', 'nombre')
                    ->required(),

                TextInput::make('nombre_cliente')
                    ->label('Nombre Completo')
                    ->required(),

                TextInput::make('correo_cliente')
                    ->label('Correo Electrónico')
                    ->email()
                    ->required(),

                TextInput::make('telefono_cliente')
                    ->label('Teléfono')
                    ->required(),

                TextInput::make('huespedes')
                    ->label('Número de Huéspedes')
                    ->numeric()
                    ->default(1)
                    ->required(),

                DatePicker::make('fecha_entrada')
                    ->label('Fecha de Entrada')
                    ->required(),

                DatePicker::make('fecha_salida')
                    ->label('Fecha de Salida')
                    ->required(),

                Select::make('estado')
                    ->label('Estado de la Reserva')
                    ->options([
                        'Pendiente' => 'Pendiente',
                        'Confirmada' => 'Confirmada',
                        'Cancelada' => 'Cancelada',
                    ])
                    ->default('Pendiente')
                    ->required(),
            ]);
    }
}