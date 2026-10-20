<?php

namespace App\Filament\Resources\Habitacions;

use App\Filament\Resources\Habitacions\Pages;
use App\Filament\Resources\Habitacions\Schemas\HabitacionForm;
use App\Filament\Resources\Habitacions\Tables\HabitacionesTable;
use App\Models\Habitacion;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;

class HabitacionResource extends Resource
{
    protected static ?string $model = Habitacion::class;

    public static function getNavigationIcon(): ?string
    {
        return 'heroicon-o-home-modern';
    }

 

    public static function form(Schema $schema): Schema
    {
        return HabitacionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HabitacionesTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHabitacions::route('/'),
            'create' => Pages\CreateHabitacion::route('/create'),
            'edit' => Pages\EditHabitacion::route('/{record}/edit'),
        ];
    }
}