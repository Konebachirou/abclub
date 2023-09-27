<?php

namespace App\Filament\Resources\ContactResource\Pages;

use Filament\Actions;
use Filament\Actions\Action;
use Illuminate\Support\Facades\Mail;
use Filament\Notifications\Notification;
use Filament\Forms\Components\RichEditor;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\ContactResource;
use App\Models\Contact;

class ListContacts extends ListRecords
{
    protected static string $resource = ContactResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('approuve')
                ->label('ENvoyer un mail')
                ->icon('heroicon-o-envelope')
                ->modalHeading('Creation de mail')
                ->form([
                    RichEditor::make('message')
                        ->label('Contenu')
                        ->required(),
                ])->action(function (array $data): void {
                    $subscribers = Contact::select('email')->get();;
                    if ($subscribers->count() > 0) {
                        foreach ($subscribers as $subscriber) {
                            //Mail::to($subscriber->email)->send(new NewsletterSubscriberNotification($data['message']));
                        }
                    } else {
                        Notification::make()->info()->title('Aucun abonné')->body('Aucun abonné pour le moment')->send();
                        return;
                    }

                    Notification::make()->success()->title('Mail envoyé')->body('Le mail a été envoyé avec succès')->send();
                    return;
                }),
        ];
    }
}
