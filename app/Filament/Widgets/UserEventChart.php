<?php

namespace App\Filament\Widgets;

use App\Models\UserEvent;
use Illuminate\Support\Carbon;
use Filament\Widgets\ChartWidget;

class UserEventChart extends ChartWidget
{
    protected static ?string $heading = 'Utilisateurs inscrits aux evenements';
    protected static ?int $sort = 3;
    protected static string $color = 'info';

    protected function getData(): array
    {
        $data = $this->getUserEventsPerMonth();
        return [
            'datasets' => [
                [
                    'label' => "Utilisateurs inscrits",
                    'data' => $data['userEventsPerMonth'],
                ]
            ],
            'labels' => $data['months']
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }

    private function getUserEventsPerMonth(): array
    {
        $userEventsPerMonth = [];
        $months = collect(range(1, 12))->map(function ($month) use (&$userEventsPerMonth) {
            $count = UserEvent::withEvents()->whereRaw("MONTH(created_at) = ?", [$month])->count();
            $userEventsPerMonth[] = $count;
            return Carbon::now()->month($month)->format('M');
        })->toArray();

        return [
            'userEventsPerMonth' => $userEventsPerMonth,
            'months' => $months
        ];
    }
}
