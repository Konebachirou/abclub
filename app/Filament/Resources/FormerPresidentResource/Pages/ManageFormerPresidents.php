<?php

namespace App\Filament\Resources\FormerPresidentResource\Pages;

use App\Filament\Resources\FormerPresidentResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageFormerPresidents extends ManageRecords
{
    protected static string $resource = FormerPresidentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
