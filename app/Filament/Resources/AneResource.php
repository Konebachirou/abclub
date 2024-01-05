<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AneResource\Pages;
use App\Filament\Resources\AneResource\RelationManagers;
use App\Models\Ane;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AneResource extends Resource
{
    protected static ?string $model = Ane::class;


    protected static ?string $navigationIcon = 'heroicon-o-swatch';
    protected static ?string $label = 'ANE';
    protected static ?string $navigationLabel = 'ANE';
    protected static ?string $navigationGroup = 'AMID';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ManageAnes::route('/'),
        ];
    }
}