<?php

namespace App\Filament\Widgets;

use App\Models\Event;
use Illuminate\Support\Carbon;
use Filament\Widgets\ChartWidget;

class ConferenceChart extends ChartWidget
{
    protected static ?string $heading = 'Conferences et Ateliers par mois';
    protected static ?int $sort = 4;
    protected static string $color = 'success';

    protected function getData(): array
    {
        $data = $this->getConferencesPerMonth();
        return [
            'datasets' => [
                [
                    'label' => "Conferences et Ateliers",
                    'data' => $data['conferencesPerMonth'],
                ]
            ],
            'labels' => $data['months']
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }

    private function getConferencesPerMonth(): array
    {
        $conferencesPerMonth = [];
        $months = collect(range(1, 12))->map(function ($month) use (&$conferencesPerMonth) {
            $count = Event::where('pole_id', 2)->whereRaw("MONTH(created_at) = ?", [$month])->count();
            $conferencesPerMonth[] = $count;
            return Carbon::now()->month($month)->format('M');
        })->toArray();

        return [
            'conferencesPerMonth' => $conferencesPerMonth,
            'months' => $months
        ];
    }
}
