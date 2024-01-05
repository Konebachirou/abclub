<?php

namespace App\Filament\Resources\AneWinnerResource\Pages;

use App\Filament\Resources\AneWinnerResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageAneWinners extends ManageRecords
{
    protected static string $resource = AneWinnerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
