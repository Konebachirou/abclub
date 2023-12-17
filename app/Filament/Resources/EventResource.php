<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Event;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TimePicker;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\EventResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\EventResource\RelationManagers;
use Filament\Forms\Components\RichEditor;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-cube-transparent';
    protected static ?string $navigationLabel = 'Evenements';
    protected static ?string $navigationGroup = 'Actualités et Événements';

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
                    ->label('Bénévolement'),

                Tables\Columns\TextColumn::make('Number_of_place')
                    ->numeric()
                    ->sortable(),
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
                Tables\Actions\EditAction::make(),
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
