<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Proveedores;

class ProveedoresOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $totalProveedores = Proveedores::count();
        $totalProveedoresActivos = Proveedores::where('estado', 'activo')->count();
        $totalProveedoresInactivos = Proveedores::where('estado', 'inactivo')->count();
        return [
            Stat::make('Total Proveedores', $totalProveedores),
            Stat::make('Proveedores Activos', $totalProveedoresActivos)->color('success'),
            Stat::make('Proveedores Inactivos', $totalProveedoresInactivos)->color('danger'),
        ];
    }
}
