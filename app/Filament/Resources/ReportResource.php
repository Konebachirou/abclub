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
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Infolists\Components\Grid;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Infolists\Components\Split;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
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
    protected static ?string $label = 'Action & New';
    protected static ?string $pluralLabel = 'Nos Actions & News';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make("News / action")
                    ->description("Creation de la news ou de l\'action")
                    ->schema([
                        Select::make('pole_id')
                            ->label('Selectionner le pole')
                            ->placeholder('Choisir un pole')
                            ->required()
                            ->options(\App\Models\Pole::pluck('name', 'id')),
                        TextInput::make('title')
                            ->label('Titre de la news ou de l\'action')
                            ->required(),
                        RichEditor::make('description')
                            ->label('Description de la news ou de l\'action')
                            ->required(),
                        RichEditor::make('caption')
                            ->label('Description de l\'image de la news ou de l\'action'),
                        Section::make('Vous creez une news ou une action ?')
                            ->schema([
                                Toggle::make('is_report')
                                    ->label('Une news')
                                    ->required(),
                                Toggle::make('is_action')
                                    ->label('Une action')
                                    ->required(),
                            ])->columns(2),
                        Section::make()
                            ->schema([
                                Toggle::make('status')
                                    ->label('Publier')
                                    ->required(),

                                DatePicker::make('date')
                                    ->required(),
                            ])->columns(2),
                        Section::make('Image')
                            ->schema([
                                FileUpload::make('illustration')
                                    ->required()
                                    ->uploadingMessage('Image en cours de telechargement...')
                                    ->image()->directory('report')->label("Image principal de la news ou de l'action"),
                                FileUpload::make('album')
                                    ->multiple()
                                    ->image()
                                    ->uploadingMessage('Images en cours de telechargement...')
                                    ->directory('album')->label("Image supplémentaire de la news ou de l'action"),
                            ])->columns(1),
                        Section::make('Fichier supplémentaire')
                            ->description('Ajouter s\'il existe des fichiers supplémentaires pour la news ou l\'action')
                            ->schema([
                                FileUpload::make('files')
                                    ->preserveFilenames()
                                    ->openable()
                                    ->multiple()
                                    ->downloadable()
                                    ->uploadingMessage('Fichiers en cours de telechargement...')
                                    ->directory('files')->label("Fichier supplémentaire de la news ou de l'action")
                                    ->label("Fichier supplémentaire de la news ou de l'action"),
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
                TextColumn::make('pole.name')->label('Pole')
                    ->sortable()
                    ->searchable(),
                ImageColumn::make('illustration')
                    ->label('Image'),
                ToggleColumn::make('status')
                    ->label('Status')
                    ->sortable()
                    ->searchable(),
                ImageColumn::make('album')
                    ->circular()
                    ->stacked(),

                ToggleColumn::make('is_report')
                    ->label('News')
                    ->sortable()
                    ->searchable(),
                ToggleColumn::make('is_action')
                    ->label('Action')
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
