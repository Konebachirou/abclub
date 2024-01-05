<?php

namespace App\Filament\Widgets;

use App\Models\Contact;
use Illuminate\Support\Carbon;
use Filament\Widgets\ChartWidget;

class ContactChart extends ChartWidget
{
    protected static ?string $heading = 'Contacts par mois';
    protected static ?int $sort = 6;
    protected static string $color = 'fuchsia';


    protected function getData(): array
    {
        $data = $this->getContactsPerDay();
        return [
            'datasets' => [
                [
                    'label' => "Contacts",
                    'data' => $data['contactsPerDay'],
                ]
            ],
            'labels' => $data['days']
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }

    private function getContactsPerDay(): array
    {
        $contactsPerDay = [];
        $days = collect(range(1, 31))->map(function ($day) use (&$contactsPerDay) {
            $count = Contact::whereRaw("DAY(created_at) = ?", [$day])->count();
            $contactsPerDay[] = $count;
            return Carbon::now()->day($day)->format('d M');
        })->toArray();

        return [
            'contactsPerDay' => $contactsPerDay,
            'days' => $days
        ];
    }
}
