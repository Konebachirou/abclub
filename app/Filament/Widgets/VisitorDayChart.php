<?php

namespace App\Filament\Widgets;

use App\Models\Visitor;
use Illuminate\Support\Carbon;
use Filament\Widgets\ChartWidget;

class VisitorDayChart extends ChartWidget
{
    protected static ?string $heading = 'Visiteurs par jour';
    protected static ?int $sort = 2;
    protected static string $color = 'secondary';


    protected function getData(): array
    {
        $data = $this->getVisitorsPerDay();
        return [
            'datasets' => [
                [
                    'label' => "Visiteurs",
                    'data' => $data['visitorsPerDay'],
                ]
            ],
            'labels' => $data['days']
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }

    private function getVisitorsPerDay(): array
    {
        $visitorsPerDay = [];
        $days = collect(range(1, 31))->map(function ($day) use (&$visitorsPerDay) {
            $count = Visitor::whereRaw("DAY(created_at) = ?", [$day])->count();
            $visitorsPerDay[] = $count;
            return Carbon::now()->day($day)->format('d M');
        })->toArray();

        return [
            'visitorsPerDay' => $visitorsPerDay,
            'days' => $days
        ];
    }
}
