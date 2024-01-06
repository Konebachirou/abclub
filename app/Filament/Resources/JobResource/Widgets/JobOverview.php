<?php

namespace App\Filament\Resources\JobResource\Widgets;

use App\Models\Job;
use App\Models\UserJob;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class JobOverview extends BaseWidget
{
    protected static ?int $sort = 1;
    protected function getStats(): array
    {
        return [
            Stat::make('Total Jobs', Job::count())
                ->description('Jobs')
                ->icon('heroicon-o-briefcase')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('info')
                ->chart([7, 3, 4, 5, 6, 3, 5, 4, 6, 7, 8, 9, 10, 11, 12, 9, 8, 7, 10, 11, 8, 6, 6, 4]),
            Stat::make('Total postulants', UserJob::count())
                ->description('Postulants')
                ->icon('heroicon-o-users')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('info')
                ->chart([7, 3, 4, 5, 6, 3, 5, 4, 6, 7, 8, 9, 10, 11, 12, 9, 8, 7, 10, 11, 8, 6, 6, 4]),

        ];
    }
}
