<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Report;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Infolists\Components\Grid;
use Filament\Infolists\Components\Split;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;
use App\Filament\Resources\ReportResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ReportResource\RelationManagers;

class ReportResource extends Resource
{
    protected static ?string $model = Report::class;

    protected static ?string $navigationIcon = 'heroicon-o-arrow-up-on-square-stack';
    protected static ?string $navigationLabel = 'Nos Actions && News';
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
                                    Grid::make(2)
                                        ->schema([
                                            TextEntry::make('title')->label('Titre'),
                                            TextEntry::make('date')->label('date'),
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
                    ->required(),
                RichEditor::make('description')
                    ->required(),
                FileUpload::make('illustration')
                    ->required()
                    ->image()->directory('report')->label("Image de la new ou de l'action"),
                RichEditor::make('caption'),
                FileUpload::make('album')
                    ->multiple()
                    ->directory('album')->label("Album"),
                Forms\Components\Toggle::make('status')
                    ->required(),
                Forms\Components\DatePicker::make('date')
                    ->required(),
                Forms\Components\Toggle::make('is_report')
                    ->label('Report')
                    ->required(),
                Forms\Components\Toggle::make('is_action')
                    ->label('Action')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('pole.name')->label('Pole'),
                ImageColumn::make('illustration'),
                Tables\Columns\TextColumn::make('caption')
                    ->searchable(),

                ToggleColumn::make('status')
                    ->label('Status'),
                Tables\Columns\TextColumn::make('date')
                    ->date()
                    ->sortable(),
                ImageColumn::make('album')
                    ->circular()
                    ->stacked(),

                ToggleColumn::make('is_report')
                    ->label('News'),
                ToggleColumn::make('is_action')
                    ->label('Action'),

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
            'index' => Pages\ListReports::route('/'),
            'create' => Pages\CreateReport::route('/create'),
            'edit' => Pages\EditReport::route('/{record}/edit'),
        ];
    }
}