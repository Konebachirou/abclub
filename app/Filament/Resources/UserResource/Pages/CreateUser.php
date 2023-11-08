<?php

namespace App\Filament\Resources\UserResource\Pages;

use Filament\Actions;
use App\Filament\Resources\UserResource;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\Traits\HasRedirect;
use App\Mail\abclub\MailToMember;
use Illuminate\Support\Facades\Mail;

class CreateUser extends CreateRecord
{
    use HasRedirect;
    protected static string $resource = UserResource::class;
    public function afterCreate(): void
    {
        $password = "passwordABC";
        Mail::to($this->record->email)->send(new MailToMember($this->record, $password));
    }
}
