<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Office;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\ActionGroup;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\OfficeResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\OfficeResource\RelationManagers;

class OfficeResource extends Resource
{
    protected static ?string $model = Office::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office';
    protected static ?string $navigationLabel = 'Bureaux';
    protected static ?string $navigationGroup = 'Equipes';
    protected static ?string $label = 'Bureau';
    protected static ?string $pluralLabel = 'Bureaux';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Bureau')
                    ->description('Information sur le Bureau')
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->label('Nom du Bureau'),
                        TextInput::make('email')
                            ->required()
                            ->label('Email'),
                        TextInput::make('phone')
                            ->required()
                            ->label('Telephone'),
                        Section::make('Adresse du Bureau')
                            ->schema([
                                TextInput::make('address')
                                    ->required()
                                    ->label('Addresse'),
                            ])->columns(1)

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
                TextColumn::make('name')
                    ->label('Nom du Bureau')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('phone')
                    ->label('Telephone')
                    ->searchable()
                    ->sortable(),
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
            'index' => Pages\ManageOffices::route('/'),
        ];
    }
}