<?php

namespace App\Filament\Resources\ConferencierResource\Pages;

use App\Filament\Resources\ConferencierResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditConferencier extends EditRecord
{
    protected static string $resource = ConferencierResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
