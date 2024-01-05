<?php

namespace App\Filament\Widgets;

use Illuminate\Support\Carbon;
use Filament\Widgets\ChartWidget;
use App\Models\NewsletterSubscriber;

class NewsletterChart extends ChartWidget
{
    protected static ?string $heading = 'Abonnements par mois a la newsletter';
    protected static ?int $sort = 6;
    protected static string $color = 'fuchsia';




    protected function getData(): array
    {
        $data = $this->getNewlettersPerMonth();
        return [
            'datasets' => [
                [
                    'label' => "Abonnements",
                    'data' => $data['newslettersPerMonth'],
                ]
            ],
            'labels' => $data['months']
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }

    private function getNewlettersPerMonth(): array
    {
        $newslettersPerMonth = [];
        $months = collect(range(1, 12))->map(function ($month) use (&$newslettersPerMonth) {
            $count = NewsletterSubscriber::whereRaw("MONTH(created_at) = ?", [$month])->count();
            $newslettersPerMonth[] = $count;
            return Carbon::now()->month($month)->format('M');
        })->toArray();

        return [
            'newslettersPerMonth' => $newslettersPerMonth,
            'months' => $months
        ];
    }
}
