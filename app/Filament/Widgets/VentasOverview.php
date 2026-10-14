<?php

namespace App\Filament\Widgets;

use App\Models\Ventas;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class VentasOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $totalVentas = Ventas::count();
        return [
            Stat::make('Total Ventas', $totalVentas),
        ];
    }
}
