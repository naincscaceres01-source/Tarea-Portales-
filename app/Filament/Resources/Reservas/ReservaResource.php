<?php

namespace App\Filament\Resources\Reservas;

use App\Filament\Resources\Reservas\Pages;
use App\Filament\Resources\Reservas\Schemas\ReservaForm;
use App\Filament\Resources\Reservas\Tables\ReservasTable;
use App\Models\Reserva;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;

class ReservaResource extends Resource
{
    protected static ?string $model = Reserva::class;

    public static function getNavigationIcon(): ?string
    {
        return 'heroicon-o-calendar-days';
    }


    public static function form(Schema $schema): Schema
    {
        return ReservaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ReservasTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListReservas::route('/'),
            'create' => Pages\CreateReserva::route('/create'),
            'edit' => Pages\EditReserva::route('/{record}/edit'),
        ];
    }
}