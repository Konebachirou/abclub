<?php

namespace App\Filament\Widgets;

use App\Models\Event;
use Illuminate\Support\Carbon;
use Filament\Widgets\ChartWidget;

class EventChart extends ChartWidget
{
    protected static ?string $heading = 'Evenements par mois';
    protected static ?int $sort = 3;
    protected static string $color = 'info';


    protected function getData(): array
    {
        $data = $this->getEventsPerMonth();
        return [
            'datasets' => [
                [
                    'label' => "Evenements",
                    'data' => $data['eventsPerMonth'],
                ]
            ],
            'labels' => $data['months']
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }

    private function getEventsPerMonth(): array
    {
        $eventsPerMonth = [];
        $months = collect(range(1, 12))->map(function ($month) use (&$eventsPerMonth) {
            $count = Event::where('pole_id', '!=', 2)->whereRaw("MONTH(created_at) = ?", [$month])->count();
            $eventsPerMonth[] = $count;
            return Carbon::now()->month($month)->format('M');
        })->toArray();

        return [
            'eventsPerMonth' => $eventsPerMonth,
            'months' => $months
        ];
    }
}
