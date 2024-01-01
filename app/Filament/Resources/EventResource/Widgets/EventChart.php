<?php

namespace App\Filament\Resources\EventResource\Widgets;

use Filament\Widgets\ChartWidget;

class EventChart extends ChartWidget
{
    protected static ?string $heading = 'Chart';

    protected function getData(): array
    {
        return [
            //
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
