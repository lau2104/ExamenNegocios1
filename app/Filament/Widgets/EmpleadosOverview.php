<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
Use App\Models\Empleados;

class EmpleadosOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $totalEmpleados = Empleados::count();
        $totalEmpleadosActivos = Empleados::where('estado', 'activo')->count();
        $totalEmpleadosInactivos = Empleados::where('estado', 'inactivo')->count();
        return [
            Stat::make('Total Empleados', $totalEmpleados),
            Stat::make('Empleados Activos', $totalEmpleadosActivos),
            Stat::make('Empleados Inactivos', $totalEmpleadosInactivos),
        ];
    }
}
