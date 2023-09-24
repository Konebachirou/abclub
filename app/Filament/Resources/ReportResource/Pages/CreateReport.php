<?php

namespace App\Filament\Resources\ReportResource\Pages;

use Filament\Actions;
use App\Filament\Resources\ReportResource;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\Traits\HasRedirect;

class CreateReport extends CreateRecord
{
    use HasRedirect;
    protected static string $resource = ReportResource::class;
}
