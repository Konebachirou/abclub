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
use Filament\Infolists\Components\Grid;
use Filament\Infolists\Components\Split;
use Filament\Tables\Actions\ActionGroup;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Infolists\Components\Section;
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
    protected static ?string $label = 'Conferenciers';
    protected static ?string $navigationGroup = 'Actualités et Événements';

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Section::make()
                    ->schema([
                        Split::make([
                            Grid::make(3)
                                ->schema([

                                    TextEntry::make('event.title')
                                        ->hiddenLabel()
                                        ->grow(),
                                    Grid::make(2)
                                        ->schema([
                                            TextEntry::make('full_name')->label('Nom et Prenom'),
                                            TextEntry::make('email')->label('E-mail'),
                                        ]),

                                    ImageEntry::make('photo')
                                        ->hiddenLabel()
                                        // ->size(750)
                                        ->height(800)
                                        ->width(600)
                                        ->grow(),


                                ])

                        ]),
                        Section::make('Description')
                            ->schema([
                                TextEntry::make('description')
                                    ->prose()
                                    ->markdown()
                                    ->hiddenLabel(),
                            ])
                            ->collapsible(),

                    ])




            ]);
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Select::make('event_id')
                    ->label('Evenement')
                    ->placeholder('Choisir un evenement')
                    ->required()
                    ->options(\App\Models\Event::pluck('title', 'id')),
                Forms\Components\TextInput::make('full_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                FileUpload::make('photo')
                    ->required()
                    ->image()->directory('conferencier')->label("Image"),
                Forms\Components\TextInput::make('job')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\Toggle::make('status')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('event.title')->label('Event')
                    ->searchable(),
                Tables\Columns\TextColumn::make('full_name')
                    ->searchable()->label('Nom et Prenom'),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('photo'),
                Tables\Columns\TextColumn::make('Profession')
                    ->searchable(),
                Tables\Columns\ToggleColumn::make('status'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ]),
            ])
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