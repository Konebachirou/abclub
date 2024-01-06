<?php

namespace App\Filament\Resources\JobResource\Widgets;

use App\Models\UserJob;
use Illuminate\Support\Carbon;
use Filament\Widgets\ChartWidget;

class PostulantJobChart extends ChartWidget
{
    protected static ?string $heading = 'Postulants aux jobs';
    protected int| String | array $columnSpan = 'full';

    protected function getData(): array
    {
        $data = $this->getUserJobsPerMonth();
        return [
            'datasets' => [
                [
                    'label' => "Utilisateurs inscrits",
                    'data' => $data['userJobsPerMonth'],
                ]
            ],
            'labels' => $data['months']
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }

    private function getUserJobsPerMonth(): array
    {
        $userJobsPerMonth = [];
        $months = collect(range(1, 12))->map(function ($month) use (&$userJobsPerMonth) {
            $count = UserJob::whereRaw("MONTH(created_at) = ?", [$month])->count();
            $userJobsPerMonth[] = $count;
            return Carbon::now()->month($month)->format('M');
        })->toArray();

        return [
            'userJobsPerMonth' => $userJobsPerMonth,
            'months' => $months
        ];
    }
}
