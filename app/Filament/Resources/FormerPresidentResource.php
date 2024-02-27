<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\FormerPresident;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\FormerPresidentResource\Pages;
use App\Filament\Resources\FormerPresidentResource\RelationManagers;

class FormerPresidentResource extends Resource
{
    protected static ?string $model = FormerPresident::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Presidents';
    protected static ?string $navigationGroup = 'Equipes';
    protected static ?string $label = 'President';
    protected static ?string $pluralLabel = 'Presidents';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Informations du president')
                    ->schema([
                        TextInput::make('first_name')
                            ->label('Nom du president')
                            ->required(),
                        TextInput::make('last_name')
                            ->required()
                            ->label('Prenoms du president'),
                        DatePicker::make('start_date')
                            ->required()
                            ->label('Date de debut de mandat du president'),
                        DatePicker::make('end_date')
                            ->required()
                            ->label('Date de fin de mandat du president'),
                        Section::make('Image du president')
                            ->schema([
                                FileUpload::make('image')
                                    ->required()
                                    ->image()->directory('president')->label('Image'),
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
                TextColumn::make('first_name')
                    ->label('Nom')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('last_name')
                    ->label('Prenoms')
                    ->searchable()
                    ->sortable(),
                ImageColumn::make('image'),
                TextColumn::make('start_date')
                    ->date()
                    ->label('Date de debut de mandat')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('end_date')
                    ->date()
                    ->label('Date de fin de mandat')
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageFormerPresidents::route('/'),
        ];
    }
}
