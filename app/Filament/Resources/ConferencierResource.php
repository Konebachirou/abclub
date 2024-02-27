<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Conferencier;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Infolists\Components\Grid;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Infolists\Components\Split;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ConferencierResource\Pages;
use App\Filament\Resources\ConferencierResource\RelationManagers;

class ConferencierResource extends Resource
{
    protected static ?string $model = Conferencier::class;


    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationLabel = 'Conferenciers';
    protected static ?string $label = 'Conferencier';
    protected static ?string $navigationGroup = 'Actualités et Événements';
    protected static ?string $pluralLabel = 'Conferenciers';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make("Conferencier")
                    ->description("Creation de la conferencier")
                    ->schema([
                        Select::make('event_id')
                            ->label('Evenement')
                            ->placeholder('Choisir un evenement')
                            ->required()
                            ->options(\App\Models\Event::pluck('title', 'id')),
                        TextInput::make('full_name')
                            ->label('Nom et Prenom')
                            ->required(),
                        TextInput::make('email')
                            ->email()
                            ->label('E-mail')
                            ->required(),
                        TextInput::make('job')
                            ->label('Profession')
                            ->required(),
                        Section::make('Image et description')
                            ->schema([
                                FileUpload::make('photo')
                                    ->required()
                                    ->image()->directory('conferencier')->label("Image du conferencier"),

                                RichEditor::make('description')
                                    ->required()
                                    ->label("Description a propos du conferencier"),
                            ])->columns(1),
                        Toggle::make('status')
                            ->required()
                            ->label('Publier')
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('created_at')
                    ->label('Date de création')
                    ->dateTime('d/m/Y')
                    ->sortable()
                    ->searchable(),
                ImageColumn::make('events.illustration')->label('Evenement')
                    ->searchable(),
                TextColumn::make('full_name')
                    ->searchable()
                    ->sortable()
                    ->label('Nom et Prenom'),
                TextColumn::make('email')
                    ->searchable()
                    ->label('Email'),
                ImageColumn::make('photo'),
                TextColumn::make('job')
                    ->searchable()
                    ->label('Profession')
                    ->sortable()
                    ->searchable(),
                ToggleColumn::make('status'),
            ])
            ->filters([
                //
            ])
            ->actions([ActionGroup::make([ViewAction::make(), Tables\Actions\EditAction::make(), Tables\Actions\DeleteAction::make()])->button()])

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
            'index' => Pages\ListConferenciers::route('/'),
            'create' => Pages\CreateConferencier::route('/create'),
            'edit' => Pages\EditConferencier::route('/{record}/edit'),
        ];
    }
}
