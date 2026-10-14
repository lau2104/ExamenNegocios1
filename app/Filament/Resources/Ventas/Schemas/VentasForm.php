<?php

namespace App\Filament\Resources\Ventas\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class VentasForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('clientes_id')
                    ->relationship('clientes', 'nombre')
                    ->searchable()
                    ->required()
                    ->preload(),
                Select::make('empleados_id')
                    ->relationship('empleados', 'nombre')
                    ->searchable()
                    ->required()
                    ->preload(),
                Select::make('productos_id')
                    ->relationship('productos', 'nombre')
                    ->searchable()
                    ->required()
                    ->preload(),
                TextInput::make('cantidad')
                    ->required()
                    ->numeric(),
                DatePicker::make('fecha')
                    ->required(),
                TextInput::make('total')
                    ->required()
                    ->numeric(),
            ]);
    }
}
