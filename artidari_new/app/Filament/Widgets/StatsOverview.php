<?php

namespace App\Filament\Widgets;

use App\Models\User;
use App\Models\Kata;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total User', User::query()->count())
                ->color('success'),
            Stat::make('Total Kata', Kata::query()->count())
                ->color('success'),
        ];
    }

    protected function getColumns(): int
    {
        return 2; // Display stats in 2 columns
    }

    protected function getExtraAttributes(): array
    {
        return [
            'class' => 'grid grid-cols-2 gap-4', // Add custom CSS classes to the widget container
        ];
    }
}
