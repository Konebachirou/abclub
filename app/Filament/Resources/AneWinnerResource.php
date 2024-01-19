<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\AneWinner;
use Filament\Tables\Table;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
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
use App\Filament\Resources\AneWinnerResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AneWinnerResource\RelationManagers;

class AneWinnerResource extends Resource
{
    protected static ?string $model = AneWinner::class;

    protected static ?string $navigationIcon = 'heroicon-o-chart-pie';
    protected static ?string $label = 'ANE Winner';
    protected static ?string $pluralLabel = 'ANE Winners';
    protected static ?string $navigationLabel = 'ANE Winners';
    protected static ?string $navigationGroup = 'AMID';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('General')
                    ->schema([
                        TextInput::make('team_name')
                            ->required()
                            ->maxLength(255)
                            ->label('Equipe'),
                        TextInput::make('rating')
                            ->required()
                            ->numeric()
                            ->label('classement'),
                        DatePicker::make('year')
                            ->required()
                            ->label('Année'),
                        Section::make('Image et Description')
                            ->schema([
                                FileUpload::make('team_picture')
                                    ->required()
                                    ->label('Image de l\'equipe'),

                                RichEditor::make('description')
                                    ->required()
                                    ->label('Description a faire par l\'equipe'),
                            ])->columns(1),
                        Section::make('Reseaux sociaux')
                            ->schema([
                                TextInput::make('facebook')
                                    ->maxLength(255),
                                TextInput::make('linkedin')
                                    ->maxLength(255),
                                TextInput::make('twitter')
                                    ->maxLength(255),
                                TextInput::make('instagram')
                                    ->maxLength(255),
                            ])->columns(4),
                        Toggle::make('status')
                            ->required()
                            ->label('Publier'),
                    ])->columns(3),





            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('created_at')
                    ->label('Date de création')
                    ->dateTime('d/m/Y'),
                TextColumn::make('team_name')
                    ->searchable()
                    ->label('Equipe'),
                ImageColumn::make('team_picture')
                    ->searchable()
                    ->label('Image'),
                TextColumn::make('year')
                    ->date()
                    ->sortable()
                    ->label('Année'),
                TextColumn::make('rating')
                    ->numeric()
                    ->sortable()
                    ->label('rang'),
                ToggleColumn::make('status'),
                TextColumn::make('facebook')
                    ->searchable(),
                TextColumn::make('linkedin')
                    ->searchable(),
                TextColumn::make('twitter')
                    ->searchable(),
                TextColumn::make('instagram')
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageAneWinners::route('/'),
        ];
    }
}
