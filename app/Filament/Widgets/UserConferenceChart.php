<?php

namespace App\Filament\Widgets;

use App\Models\UserEvent;
use Illuminate\Support\Carbon;
use Filament\Widgets\ChartWidget;

class UserConferenceChart extends ChartWidget
{
    protected static ?string $heading = 'Utilisateurs inscrits aux conferences et ateliers';
    protected static ?int $sort = 4;
    protected static string $color = 'success';

    protected function getData(): array
    {
        $data = $this->getUserConferencesPerMonth();
        return [
            'datasets' => [
                [
                    'label' => "Utilisateurs inscrits",
                    'data' => $data['userConferencesPerMonth'],
                ]
            ],
            'labels' => $data['months']
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }

    private function getUserConferencesPerMonth(): array
    {
        $userConferencesPerMonth = [];
        $months = collect(range(1, 12))->map(function ($month) use (&$userConferencesPerMonth) {
            $count = UserEvent::notEvents()->whereRaw("MONTH(created_at) = ?", [$month])->count();
            $userConferencesPerMonth[] = $count;
            return Carbon::now()->month($month)->format('M');
        })->toArray();

        return [
            'userConferencesPerMonth' => $userConferencesPerMonth,
            'months' => $months
        ];
    }
}
