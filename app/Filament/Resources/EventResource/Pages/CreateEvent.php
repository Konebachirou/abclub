<?php

namespace App\Filament\Resources\EventResource\Pages;

use Filament\Actions;
use App\Filament\Resources\EventResource;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\Traits\HasRedirect;

class CreateEvent extends CreateRecord
{
    use HasRedirect;
    protected static string $resource = EventResource::class;
}