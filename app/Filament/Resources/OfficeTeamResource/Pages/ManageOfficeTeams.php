<?php

namespace App\Filament\Resources\OfficeTeamResource\Pages;

use App\Filament\Resources\OfficeTeamResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageOfficeTeams extends ManageRecords
{
    protected static string $resource = OfficeTeamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
