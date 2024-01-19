<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Partner;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PartnerResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PartnerResource\RelationManagers;

class PartnerResource extends Resource
{
    protected static ?string $model = Partner::class;

    protected static ?string $navigationIcon = 'heroicon-o-squares-2x2';
    protected static ?string $navigationGroup = 'Partenariat';
    protected static ?string $navigationLabel = 'Partenaires';
    protected static ?string $label = 'Partenaire';
    protected static ?string $pluralLabel = 'Partenaires';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Partenaire')
                    ->description('Informations du partenaire')
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->label('Nom du partenaire'),
                        TextInput::make('website')
                            ->required()
                            ->label('website du partenaire'),
                        Select::make('pole_id')
                            ->label('Selectionner le pole')
                            ->required()
                            ->options(\App\Models\Pole::pluck('name', 'id')),

                        Section::make('Logo')
                            ->description('Logo du partenaire')
                            ->schema([
                                FileUpload::make('logo')
                                    ->required()
                                    ->image()->directory('partenaire')->label('Enter le logo'),
                            ]), Toggle::make('status')
                            ->label('Publier')
                            ->required(),
                    ])->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('created_at')
                    ->label('Date de création')
                    ->label('Date de création')
                    ->dateTime('d/m/Y'),
                TextColumn::make('name')
                    ->searchable(),
                ImageColumn::make('logo'),
                ToggleColumn::make('status')
                    ->label('Status'),
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
            'index' => Pages\ManagePartners::route('/'),
        ];
    }
}
