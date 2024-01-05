<?php

namespace App\Filament\Resources\ConferencierResource\Pages;

use App\Filament\Resources\ConferencierResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListConferenciers extends ListRecords
{
    protected static string $resource = ConferencierResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
