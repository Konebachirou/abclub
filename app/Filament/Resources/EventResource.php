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
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Infolists\Components\Grid;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Infolists\Components\Group;
use Filament\Infolists\Components\Split;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TimePicker;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
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
    protected static ?string $label = 'Evenement';
    protected static ?string $pluralLabel = 'Evenements';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make("Evenement")
                    ->description("Creation de l'evenement")
                    ->schema([
                        Select::make('pole_id')
                            ->label('Pole')
                            ->placeholder('Choisir un pole')
                            ->required()
                            ->options(\App\Models\Pole::pluck('name', 'id')),
                        TextInput::make('title')
                            ->required()
                            ->label('Titre de l\'evenement'),
                        DatePicker::make('start_date')
                            ->default(now())
                            ->label('Date de debut de l\'evenement')
                            ->required(),
                        DatePicker::make('end_date')
                            ->label('Date de fin de l\'evenement')
                            ->required(),
                        TimePicker::make('start_times')
                            ->label('Heure de debut de l\'evenement')
                            ->default(now())
                            ->required(),
                        TimePicker::make('end_times')
                            ->label('Heure de fin de l\'evenement')
                            ->required(),
                        TextInput::make('Number_of_place')
                            ->required()
                            ->label('Nombre de place')
                            ->numeric(),
                        TextInput::make('payment_link')
                            ->label('Lien de paiement'),
                        Section::make('Lieu de l\'evenement')
                            ->schema([
                                TextInput::make('lieu')
                            ])->columns(1),

                        Section::make('Statut de l\'evenement')
                            ->description('Voulez vous publier l\'evenement ?')
                            ->schema([
                                Toggle::make('is_active')
                                    ->label('Publier')
                                    ->required(),
                            ])->columns(2),

                        Section::make('Type de l\'evenement')
                            ->description('L\'evenement est-il payant ?')
                            ->schema([
                                Toggle::make('is_paid')
                                    ->label('avec paiement')
                                    ->required(),
                            ])->columns(2),


                        Section::make('Image de l\'evenement')
                            ->schema([
                                FileUpload::make('illustration')
                                    ->required()
                                    ->image()->directory('event')->label("Image "),

                            ])->columns(1),
                        Section::make('Description de l\'evenement')
                            ->schema([
                                RichEditor::make('description')
                                    ->required(),
                            ])
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
                ImageColumn::make('illustration'),
                ToggleColumn::make('is_active')
                    ->label('Status'),
                ToggleColumn::make('is_paid')
                    ->label('Payant')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('Number_of_place')
                    ->numeric()
                    ->sortable()
                    ->searchable()
                    ->label('Nombre de places'),
                TextColumn::make('start_date')
                    ->date()
                    ->label('Date de debut')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('end_date')
                    ->date()
                    ->label('Date de fin')
                    ->sortable()
                    ->searchable(),

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
