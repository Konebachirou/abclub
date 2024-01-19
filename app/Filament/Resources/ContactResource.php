<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Contact;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use App\Mail\abclub\ContactToUser;
use Filament\Tables\Actions\Action;
use Illuminate\Support\Facades\Mail;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\ActionGroup;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Filament\Infolists\Components\TextEntry;
use App\Filament\Resources\ContactResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ContactResource\RelationManagers;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Communication et Contacts';


    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('full_name'),
                TextEntry::make('email'),
                TextEntry::make('subject'),
                TextEntry::make('message')
                    ->columnSpan(2), // or `columnSpan('full')`,
            ]);
    }
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('created_at')
                    ->label('Date de création')
                    ->dateTime('d/m/Y'),
                TextColumn::make('full_name')
                    ->label('Nom et Prenoms')
                    ->searchable(),
                TextColumn::make('email')
                    ->searchable(),
                TextColumn::make('subject')
                    ->label('Sujet')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([ActionGroup::make([ViewAction::make(), Action::make('sendEmail')
                ->label('Repondre au message')
                ->icon('heroicon-o-envelope')
                ->modalHeading('Envoi de mail')
                ->form([
                    TextInput::make('subject')->required(),
                    RichEditor::make('body')->required(),
                ])
                ->action(function (array $data, Contact $contact) {
                    Mail::to($contact->email)->send(new ContactToUser($data['subject'], $data['body']));
                    return redirect()->back()->with('success', 'Message envoyé');
                }), Tables\Actions\DeleteAction::make()])->button()])

            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContacts::route('/'),
            'create' => Pages\CreateContact::route('/create'),

        ];
    }
}
