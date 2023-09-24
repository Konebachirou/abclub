<?php

namespace App\Filament\Resources\PoleResource\Pages;

use Filament\Actions;
use App\Filament\Resources\PoleResource;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\Traits\HasRedirect;

class CreatePole extends CreateRecord
{
    use HasRedirect;
    protected static string $resource = PoleResource::class;
}
