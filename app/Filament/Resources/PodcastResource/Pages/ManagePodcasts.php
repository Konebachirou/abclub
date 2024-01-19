<?php

namespace App\Filament\Resources\PodcastResource\Pages;

use App\Filament\Resources\PodcastResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManagePodcasts extends ManageRecords
{
    protected static string $resource = PodcastResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
