<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Clientes;

class ClientesOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $totalClientes = Clientes::count();
        $clientesActivos = Clientes::where('estado', 'activo')->count();
        $clientesInactivos = Clientes::where('estado', 'inactivo')->count();

        return [
            Stat::make('Total Clientes', $totalClientes),
            Stat::make('Clientes Activos', $clientesActivos),
            Stat::make('Clientes Inactivos', $clientesInactivos),
        ];
    }
}
