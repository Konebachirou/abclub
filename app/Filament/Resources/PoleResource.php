<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Pole;
use Filament\Tables;
use Filament\Forms\Form;
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
use App\Filament\Resources\PoleResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PoleResource\RelationManagers;

class PoleResource extends Resource
{
    protected static ?string $model = Pole::class;

    protected static ?string $navigationIcon = 'heroicon-o-bookmark';
    protected static ?string $navigationGroup = 'Pôles';
    protected static ?string $label = 'Pôle';
    protected static ?string $pluralLabel = 'Poles';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Pole')
                    ->description('Informations du pole')
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->label('Nom du pole'),
                        FileUpload::make('icon')
                            ->required()
                            ->image()->directory('pole')->label("Icon du pole"),
                        RichEditor::make('description')
                            ->label('description du pole')
                            ->required(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('created_at')
                    ->label('Date de création')
                    ->dateTime('d/m/Y'),
                TextColumn::make('name')
                    ->searchable(),
                ImageColumn::make('icon'),
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
            'index' => Pages\ListPoles::route('/'),
            'create' => Pages\CreatePole::route('/create'),
            'edit' => Pages\EditPole::route('/{record}/edit'),
        ];
    }
}
