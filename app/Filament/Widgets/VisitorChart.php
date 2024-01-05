<?php

namespace App\Filament\Widgets;

use Carbon\Carbon;
use App\Models\Visitor;
use Filament\Widgets\ChartWidget;

class VisitorChart extends ChartWidget
{
    protected static ?string $heading = 'Visiteurs par mois';
    protected static ?int $sort = 2;
    protected static string $color = 'secondary';


    protected function getData(): array
    {
        $data = $this->getVisitorsPerMonth();
        return [
            'datasets' => [
                [
                    'label' => "Visiteurs",
                    'data' => $data['visitorsPerMonth'],
                ]
            ],
            'labels' => $data['months']
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
    private function getVisitorsPerMonth(): array
    {
        $visitorsPerMonth = [];
        $months = collect(range(1, 12))->map(function ($month) use (&$visitorsPerMonth) {
            $count = Visitor::whereRaw("MONTH(created_at) = ?", [$month])->count();
            $visitorsPerMonth[] = $count;
            return Carbon::now()->month($month)->format('M');
        })->toArray();


        return [
            'visitorsPerMonth' => $visitorsPerMonth,
            'months' => $months
        ];
    }
}
