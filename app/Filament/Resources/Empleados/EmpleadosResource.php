<?php

namespace App\Filament\Resources\Empleados;

use App\Filament\Resources\Empleados\Pages\CreateEmpleados;
use App\Filament\Resources\Empleados\Pages\EditEmpleados;
use App\Filament\Resources\Empleados\Pages\ListEmpleados;
use App\Filament\Resources\Empleados\Schemas\EmpleadosForm;
use App\Filament\Resources\Empleados\Tables\EmpleadosTable;
use App\Models\Empleados;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class EmpleadosResource extends Resource
{
    protected static ?string $model = Empleados::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Empleados';

    public static function form(Schema $schema): Schema
    {
        return EmpleadosForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EmpleadosTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListEmpleados::route('/'),
            'create' => CreateEmpleados::route('/create'),
            'edit' => EditEmpleados::route('/{record}/edit'),
        ];
    }
}
