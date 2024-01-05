<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Event;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Infolists\Components\Grid;
use Filament\Infolists\Components\Group;
use Filament\Infolists\Components\Split;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TimePicker;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;
use App\Filament\Resources\EventResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\EventResource\RelationManagers;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-cube-transparent';
    protected static ?string $navigationLabel = 'Evenements';
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

                                    TextEntry::make('pole.name')
                                        ->hiddenLabel()
                                        ->grow(),
                                    Grid::make(3)
                                        ->schema([
                                            TextEntry::make('start_date')->label('Date debut'),
                                            TextEntry::make('end_date')->label('Date fin'),
                                            TextEntry::make('start_times')->label('Heure debut'),
                                            TextEntry::make('end_times')->label('Heure fin'),
                                            TextEntry::make('lieu'),
                                            TextEntry::make('Number_of_place')
                                                ->label('Place'),
                                        ]),

                                    ImageEntry::make('illustration')
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
                Select::make('pole_id')
                    ->label('Pole')
                    ->placeholder('Choisir un pole')
                    ->required()
                    ->options(\App\Models\Pole::pluck('name', 'id')),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                FileUpload::make('illustration')
                    ->required()
                    ->image()->directory('event')->label("Image de l'evenement"),
                RichEditor::make('description')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\Toggle::make('is_active')
                    ->required(),
                Forms\Components\Toggle::make('is_free')
                    ->required(),
                Forms\Components\TextInput::make('Number_of_place')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('payment_link')
                    ->maxLength(255),
                Forms\Components\DatePicker::make('start_date')
                    ->required(),
                Forms\Components\DatePicker::make('end_date')
                    ->required(),
                TimePicker::make('start_times')
                    ->required(),
                TimePicker::make('end_times')
                    ->required(),
                Forms\Components\TextInput::make('lieu')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('is_event')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('pole.name')->label('Pole')
                    ->sortable(),
                ImageColumn::make('illustration'),

                ToggleColumn::make('is_active')
                    ->label('Status'),
                ToggleColumn::make('is_free')
                    ->label('Bénévolat'),
                ToggleColumn::make('is_event')
                    ->label('Evenement'),

                Tables\Columns\TextColumn::make('Number_of_place')
                    ->numeric()
                    ->sortable()
                    ->label('Nombre de places'),
                Tables\Columns\TextColumn::make('start_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('end_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('start_times'),
                Tables\Columns\TextColumn::make('end_times'),
                Tables\Columns\TextColumn::make('lieu')
                    ->searchable(),
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}