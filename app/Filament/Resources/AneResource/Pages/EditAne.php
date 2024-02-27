<?php

namespace App\Filament\Resources\AneResource\Pages;

use App\Filament\Resources\AneResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAne extends EditRecord
{
    protected static string $resource = AneResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
