<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\OfficeTeam;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\OfficeTeamResource\Pages;
use App\Filament\Resources\OfficeTeamResource\RelationManagers;

class OfficeTeamResource extends Resource
{
    protected static ?string $model = OfficeTeam::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';
    protected static ?string $navigationLabel = 'Conseil d Administration';
    protected static ?string $navigationGroup = 'Equipes';
    protected static ?string $label = "Membre du Conseil d'Administration";
    protected static ?string $pluralLabel = "Membres du Conseil d'Administration";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Membre du Conseil d Administration')
                    ->description('Information sur le membre du Conseil d Administration')
                    ->schema([
                        TextInput::make('last_name')
                            ->label('Nom')
                            ->required(),
                        TextInput::make('first_name')
                            ->required()
                            ->label('Prenoms'),
                        TextInput::make('email')
                            ->required(),
                        TextInput::make('level')
                            ->label('Profession')
                            ->required(),
                        TextInput::make('country')
                            ->label('Pays')
                            ->required(),
                        TextInput::make('city')
                            ->label('Ville')
                            ->required(),
                        Section::make('Réseaux sociaux')
                            ->schema([
                                TextInput::make('facebook'),
                                TextInput::make('linkedin'),
                                TextInput::make('twitter'),
                                TextInput::make('instagram'),
                            ])->columns(4),
                        Section::make('Photo du membre')
                            ->schema([
                                FileUpload::make('image')
                                    ->required()
                                    ->image()->directory('membre')->label('Image du membre'),
                            ])->columns(1),
                        Section::make('Description a propos du membre')
                            ->schema([
                                RichEditor::make('description')
                                    ->required(),
                            ])->columns(1),

                    ])->columns(3),

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
                TextColumn::make('fullName')
                    ->searchable()
                    ->sortable()
                    ->label('Nom et prenoms'),
                ImageColumn::make('image'),
                TextColumn::make('office.name')->label('Bureau')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('level')
                    ->label('Profession')
                    ->searchable()
                    ->sortable()
                    ->label('Profession'),
                TextColumn::make('email')
                    ->searchable()
                    ->label('Email')
                    ->sortable(),
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
            'index' => Pages\ManageOfficeTeams::route('/'),
        ];
    }
}
