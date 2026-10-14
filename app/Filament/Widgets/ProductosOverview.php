<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Productos;

class ProductosOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $totalProductos = Productos::count();
        return [
            Stat::make('Total Productos', $totalProductos),
        ];
    }
}
