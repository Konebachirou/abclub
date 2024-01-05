<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\AneWinner;
use Filament\Tables\Table;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Infolists\Components\Grid;
use Filament\Infolists\Components\Split;
use Filament\Tables\Actions\ActionGroup;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;
use App\Filament\Resources\AneWinnerResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AneWinnerResource\RelationManagers;

class AneWinnerResource extends Resource
{
    protected static ?string $model = AneWinner::class;

    protected static ?string $navigationIcon = 'heroicon-o-chart-pie';
    protected static ?string $label = 'ANE Winners';
    protected static ?string $navigationLabel = 'ANE Winners';
    protected static ?string $navigationGroup = 'AMID';

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Section::make()
                    ->schema([
                        Split::make([
                            Grid::make(3)
                                ->schema([

                                    TextEntry::make('team_name')
                                        ->hiddenLabel()
                                        ->grow(),
                                    Grid::make(2)
                                        ->schema([
                                            TextEntry::make('rating')->label('Rang'),
                                            TextEntry::make('year')->label('Année'),
                                        ]),

                                    ImageEntry::make('team_picture')
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
                Forms\Components\TextInput::make('team_name')
                    ->required()
                    ->maxLength(255)
                    ->label('Equipe'),
                FileUpload::make('team_picture')
                    ->required()
                    ->label('Image'),
                Forms\Components\DatePicker::make('year')
                    ->required()
                    ->label('Année'),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('rating')
                    ->required()
                    ->numeric()
                    ->label('rang'),
                Forms\Components\Toggle::make('status')
                    ->required(),
                Forms\Components\TextInput::make('facebook')
                    ->maxLength(255),
                Forms\Components\TextInput::make('linkedin')
                    ->maxLength(255),
                Forms\Components\TextInput::make('twitter')
                    ->maxLength(255),
                Forms\Components\TextInput::make('instagram')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('team_name')
                    ->searchable()
                    ->label('Equipe'),
                Tables\Columns\ImageColumn::make('team_picture')
                    ->searchable()
                    ->label('Image'),
                Tables\Columns\TextColumn::make('year')
                    ->date()
                    ->sortable()
                    ->label('Année'),
                Tables\Columns\TextColumn::make('rating')
                    ->numeric()
                    ->sortable()
                    ->label('rang'),
                Tables\Columns\ToggleColumn::make('status'),
                Tables\Columns\TextColumn::make('facebook')
                    ->searchable(),
                Tables\Columns\TextColumn::make('linkedin')
                    ->searchable(),
                Tables\Columns\TextColumn::make('twitter')
                    ->searchable(),
                Tables\Columns\TextColumn::make('instagram')
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageAneWinners::route('/'),
        ];
    }
}
