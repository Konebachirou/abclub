<?php

namespace App\Filament\Resources\UserResource\Pages;

use Filament\Actions;
use App\Filament\Resources\UserResource;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\Traits\HasRedirect;

class CreateUser extends CreateRecord
{
    use HasRedirect;
    protected static string $resource = UserResource::class;
}
